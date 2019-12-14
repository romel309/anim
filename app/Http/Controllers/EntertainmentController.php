<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entertainment;

class EntertainmentController extends Controller
{
    public function index(){
        $entertainments = Entertainment::latest()->get();
        return view('entertainment.index', ['entertainments' => $entertainments]);
    }

    public function show(Entertainment $entertainment){
        return view('entertainment.show', ['entertainment' => $entertainment]);
    }
}
