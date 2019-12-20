<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Tag;

class TagController extends Controller
{
  public function admin_index(){
      $tags = Tag::orderBy('created_at','DESC')->paginate(10);
      return view('tag.admin_index', ['tags' => $tags]);
  }

  public function admin_create(){
      return view('tag.admin_create');
  }

  public function admin_store(){
      $validatedAttributes = request()->validate([
        'name' => 'required|max:255|unique:tags',
        'description' => 'required|max:255',
      ]);
      Tag::create($validatedAttributes);
      return redirect()->route('admin_tag.index')
                        ->with('success','El tag ha sido creado exitosamente');
  }

  public function admin_edit(Tag $tag){
      return view('tag.admin_edit', ['tag' => $tag]);
  }

  public function admin_update(Tag $tag){
    $validatedAttributes = request()->validate([
      'name' => 'required|max:255|unique:tags,name,'.$tag->id,
      'description' => 'required|max:255',
    ]);
    $tag->update($validatedAttributes);
    return redirect()->route('admin_tag.index')
                      ->with('success','El tag ha sido editado exitosamente');
  }

  public function admin_delete(Tag $tag){
    $tag->delete();
    return redirect()->route('admin_tag.index')
                      ->with('success','El tag ha sido borrado exitosamente');
  }

}
