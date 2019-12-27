<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Catalog;
use App\Entertainment;
use App\Tag;

class AdminHomeController extends Controller
{
  public function index()
  {
      $users = User::all()->count();
      $entertainments = Entertainment::all()->count();
      $catalogs = Catalog::all()->count();
      $tags = Tag::all()->count();
      return view('home.admin_home', compact('users', 'entertainments', 'catalogs', 'tags'));
  }
}
