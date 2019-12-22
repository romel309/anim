<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use App\CustomClasses\VideoUrlParser;
use App\Entertainment;
use App\Tag;
use Auth;

class EntertainmentController extends Controller
{
    public function index(){
        if(request('tag')){
          $entertainments =  Tag::where('name',request('tag'))->firstOrFail()->entertainments()->paginate(12);
        } else{
          $entertainments = Entertainment::orderBy('created_at','DESC')->paginate(12);
        }
        return view('entertainment.index', ['entertainments' => $entertainments]);
    }

    public function show(Entertainment $entertainment){
        return view('entertainment.show', ['entertainment' => $entertainment]);
    }

    public function admin_index(){
      $entertainments = Entertainment::orderBy('created_at','DESC')->paginate(12);
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
        'description' => 'required|string|max:255',
        'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'youtube_link' => 'nullable|url|string|max:255',
        'tagging' => 'required',
      ]);
      $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
      $datatToStore = ([
        'user_id' => Auth::user()->id,
        'name' => request()->name,
        'description' => request()->description,
        'youtube_link' => request()->youtube_link,
        'img_path' => 'visitor/images/bg/'.$imageName,
      ]);
      Entertainment::create($datatToStore);
      request()->img_path->move(public_path('visitor/images/bg'), $imageName);
      $searchEntertainment = Entertainment::where('name', request()->name)->first();
      $searchEntertainment->tag()->sync(request()->tagging);
      return redirect()->route('admin_entertainment.index')
                        ->with('success','Se agregó el entretenimiento exitosamente');
      //$user = App\User::create($request->only('name', 'age'); // or whatever the parent in the relationship is
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
        'description' => 'required|string|max:255',
        'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'youtube_link' => 'nullable|url|string|max:255',
        'tagging' => 'required',
      ]);
      if(request()->hasfile('img_path')){
        $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
        $datatToStore = ([
          'user_id' => Auth::user()->id,
          'name' => request()->name,
          'description' => request()->description,
          'youtube_link' => request()->youtube_link,
          'img_path' => 'visitor/images/bg/'.$imageName,
        ]);
        if(File::exists($entertainment->img_path)) {
            File::delete($entertainment->img_path);
        }
        $entertainment->update($datatToStore);
        request()->img_path->move(public_path('visitor/images/bg'), $imageName);
        $searchEntertainment = Entertainment::where('name', request()->name)->first();
        $searchEntertainment->tag()->sync(request()->tagging);
      }
      else{
        $entertainment->update(request()->only('name', 'description', 'youtube_link'));
        $searchEntertainment = Entertainment::where('name', request()->name)->first();
        $searchEntertainment->tag()->sync(request()->tagging);
      }
      return redirect()->route('admin_entertainment.index')
                        ->with('success','Se agregó el entretenimiento exitosamente');
    }

    public function admin_delete(Entertainment $entertainment){
      if(File::exists($entertainment->img_path)) {
          File::delete($entertainment->img_path);
      }
      $entertainment->delete();
      return redirect()->route('admin_entertainment.index')
                        ->with('success','El entretenimiento ha sido borrado exitosamente');
    }

}
