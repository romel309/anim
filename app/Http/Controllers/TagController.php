<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
  public function admin_index(){
      $tags = Tag::paginate(20);
      return view('tag.admin_index', ['tags' => $tags]);
  }

  public function admin_create(){
      return view('tag.admin_create');
  }

  public function admin_edit(Tag $tag){
      return view('tag.admin_edit', ['tag' => $tag]);
  }

}
