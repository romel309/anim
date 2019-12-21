<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
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
        'youtube_link' => 'nullable|string|max:255',
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
      return view('entertainment.admin_edit', compact('tags', 'entertainment'));
    }

    public function admin_update(Entertainment $entertainment){

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
