<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\User;
use App\Catalog;
use App\Entertainment;
use App\Carousel;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $users = User::take(4)->get();
      $entertainments = Entertainment::orderBy('created_at', 'DESC')->take(3)->get();
      $catalogs = Catalog::orderBy('created_at', 'DESC')->take(3)->get();
      $tags = Tag::orderBy('created_at', 'DESC')->take(3)->get();
      $carousel = Carousel::where('show', 1)->get();
        return view('home.visitor_home', compact('users', 'entertainments', 'tags', 'catalogs', 'carousel'));
    }
}
