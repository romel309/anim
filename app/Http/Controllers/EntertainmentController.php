<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entertainment;
use App\Tag;

class EntertainmentController extends Controller
{
    public function index(){
        if(request('tag')){
          $entertainments =  Tag::where('name',request('tag'))->firstOrFail()->entertainments->paginate();
        } else{
          $entertainments = Entertainment::paginate(12);
        }
        return view('entertainment.index', ['entertainments' => $entertainments]);
    }

    public function show(Entertainment $entertainment){
        return view('entertainment.show', ['entertainment' => $entertainment]);
    }
}
