<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\CustomClasses\VideoUrlParser;
use App\Entertainment;
use App\Tag;
use App;
use Auth;

class EntertainmentController extends Controller
{
    public function index(){
        if(request('tag')){
          $entertainments =  Tag::where('name',request('tag'))->firstOrFail()->entertainments()->paginate(12);
        } else{
          $entertainments = Entertainment::orderBy('id','DESC')->paginate(12);
        }
        return view('entertainment.index', ['entertainments' => $entertainments]);
    }

    public function show(Entertainment $entertainment){
        $avg_rating = $entertainment->ratings()->wherePivot('entertainment_id', $entertainment->id)->pluck('rating')->avg();
        $user_id=Auth::id();
        $rating = '';
        if($user_id){
          $rating = $entertainment->ratings()->wherePivot('user_id', $user_id)
                                             ->wherePivot('entertainment_id', $entertainment->id)
                                             ->pluck('rating');
          $rating = Str::replaceFirst('[', '', $rating);
          $rating = Str::replaceFirst(']', '', $rating);
        }
        $entertainments =  Entertainment::orderBy('id', 'DESC')->take(6)->get();
        $youtube = $entertainment->youtube_link;
        $iframeyoutube='';
        if ($youtube) {
            $iframeyoutube= VideoUrlParser::get_youtube_embed(VideoUrlParser::get_youtube_id($entertainment->youtube_link));
        }
        return view('entertainment.show', compact('entertainments', 'entertainment', 'iframeyoutube', 'rating') );
    }

    public function admin_index(){
      $entertainments = Entertainment::orderBy('id','DESC')->paginate(12);
      return view('entertainment.admin_index', ['entertainments' => $entertainments]);
    }

    public function admin_show(Entertainment $entertainment){
        return view('entertainment.admin_show', ['entertainment' => $entertainment]);
    }

    public function admin_create(){
        $tags = Tag::all();
        return view('entertainment.admin_create', compact('tags'));
    }

    public function admin_store(Entertainment $entertainment){
      $validatedAttributes = request()->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:3000|min:1',
        'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'youtube_link' => 'nullable|url|string|max:255',
        'tagging' => 'required',
      ]);
      Arr::pull($validatedAttributes, 'img_path');
      $user_auth_id = Arr::add($validatedAttributes, 'user_id', Auth::user()->id);
      if (App::environment('local')){
        $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
        $datatToStore = Arr::add($user_auth_id, 'img_path', 'visitor/images/entertainment/'.$imageName);
        request()->img_path->move(public_path('visitor/images/entertainment'), $imageName);
      }
      if (App::environment('production')){
        $path = Storage::disk('s3')->putFile('entertainment', request()->img_path, 'public');
        $url = Storage::disk('s3')->url($path);
        $datatToStore = Arr::add($user_auth_id, 'img_path', $url);
      }
      Entertainment::create($datatToStore);
      $searchEntertainment = Entertainment::where('name', request()->name)->first();
      $searchEntertainment->tag()->sync(request()->tagging);
      return redirect()->route('admin_entertainment.index')
                        ->with('success','Se agregó el entretenimiento exitosamente');
    }

    public function admin_edit(Entertainment $entertainment){
      $tags = Tag::all();
      $checked = collect();
      foreach ($entertainment->tag as $che) {
          if($tags->contains('name', $che->name)){
            $checked->push($che->id);
          }
      }
      $iframeyoutube= VideoUrlParser::get_youtube_embed(VideoUrlParser::get_youtube_id($entertainment->youtube_link));
      return view('entertainment.admin_edit', compact('tags', 'entertainment', 'checked', 'iframeyoutube'));
    }

    public function admin_update(Entertainment $entertainment){
      $validatedAttributes = request()->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:3000|min:1',
        'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'youtube_link' => 'nullable|url|string|max:255',
        'tagging' => 'required',
      ]);
      if(request()->hasfile('img_path')){
        Arr::pull($validatedAttributes, 'img_path');
        $user_auth_id = Arr::add($validatedAttributes, 'user_id', Auth::user()->id);
        if (App::environment('local')){
          $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
          $datatToStore = Arr::add($user_auth_id, 'img_path', 'visitor/images/entertainment/'.$imageName);
          if(File::exists($entertainment->img_path)) {
              File::delete($entertainment->img_path);
          }
          request()->img_path->move(public_path('visitor/images/entertainment'), $imageName);
        }
        if (App::environment('production')){
          $aws_url = env('AWS_URL', false);
          $path = Str::after($entertainment->img_path, $aws_url);
          if(Storage::disk('s3')->exists($path)){
            Storage::disk('s3')->delete($path);
          }
          $path = Storage::disk('s3')->putFile('entertainment', request()->img_path, 'public');
          $url = Storage::disk('s3')->url($path);
          $datatToStore = Arr::add($user_auth_id, 'img_path', $url);
        }
        $entertainment->update($datatToStore);
        $entertainment->tag()->sync(request()->tagging);
      }
      else{
        $entertainment->update(request()->only('name', 'description', 'youtube_link'));
        $entertainment->tag()->sync(request()->tagging);
      }
      return redirect()->route('admin_entertainment.index')
                        ->with('success','Se agregó el entretenimiento exitosamente');
    }

    public function admin_delete(Entertainment $entertainment){
      if (App::environment('local')){
        if(File::exists($entertainment->img_path)) {
            File::delete($entertainment->img_path);
        }
      }
      if (App::environment('production')){
        $aws_url = env('AWS_URL', false);
        $path = Str::after($entertainment->img_path, $aws_url);
        if(Storage::disk('s3')->exists($path)){
          Storage::disk('s3')->delete($path);
        }
      }
      $entertainment->delete();
      return redirect()->route('admin_entertainment.index')
                        ->with('success','El entretenimiento ha sido borrado exitosamente');
    }

}
