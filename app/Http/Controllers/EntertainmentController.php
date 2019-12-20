<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Entertainment;
use App\Tag;

class EntertainmentController extends Controller
{
    public function index(){
        if(request('tag')){
          $entertainments =  Tag::where('name',request('tag'))->firstOrFail()->entertainments()->paginate(12);
        } else{
          $entertainments = Entertainment::paginate(12);
        }
        return view('entertainment.index', ['entertainments' => $entertainments]);
    }

    public function admin_index(){
      $entertainments = Entertainment::paginate(12);
      return view('entertainment.admin_index', ['entertainments' => $entertainments]);
    }

    public function show(Entertainment $entertainment){
        return view('entertainment.show', ['entertainment' => $entertainment]);
    }
}
