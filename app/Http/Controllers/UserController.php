<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use App\User;
use App\Entertainment;
use Auth;
use Hash;

class UserController extends Controller
{
  public function index(){
      $users = User::orderBy('id','DESC')->paginate(6);
      return view('user.index', ['users' => $users]);
  }

  public function show(User $user){
    return view('user.show', ['user' => $user]);
  }

  public function admin_index(){
      $users = User::orderBy('id','ASC')->paginate(6);
      return view('user.admin_index', ['users' => $users]);
  }

  public function admin_create(){
    return view('user.admin_create');
  }

  public function admin_store(User $user){
    $validatedAttributes = request()->validate([
      'name' => 'required|string|max:255',
      'email' => 'nullable|email|max:255|unique:users|string',
      'username' => 'required|max:255|unique:users|string',
      'description' => 'required|string|max:255',
      'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'password' => 'required|string|confirmed',
    ]);
    $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
    $hashPassword = Hash::make(Arr::pull($validatedAttributes, 'password'));
    Arr::pull($validatedAttributes, 'img_path');
    $validatedAttributes = Arr::add($validatedAttributes, 'img_path', 'visitor/images/user/'.$imageName);
    $validatedAttributes = Arr::add($validatedAttributes, 'password', $hashPassword);
    User::create($validatedAttributes);
    request()->img_path->move(public_path('visitor/images/user'), $imageName);
    return redirect()->route('admin_user.index')
                      ->with('success','Se agregó el usuario exitosamente');
  }

  public function admin_edit(User $user){
    return view('user.admin_edit', ['user' => $user]);
  }

  public function admin_update(User $user){
    $validatedAttributes = request()->validate([
      'name' => 'required|string|max:255',
      'email' => 'nullable|email|max:255|string|unique:users,email,'.$user->id,
      'username' => 'required|max:255|string|unique:users,username,'.$user->id,
      'description' => 'required|string|max:255',
      'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'password' => 'nullable|string|confirmed',
    ]);
    if(request()->filled('password')){
      $hashPassword = Hash::make(Arr::pull($validatedAttributes, 'password'));
      $validatedAttributes = Arr::add($validatedAttributes, 'password', $hashPassword);
    } else{
      Arr::pull($validatedAttributes, 'password');
    }
    if(request()->hasfile('img_path')){
      $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
      if(File::exists($user->img_path)) {
          File::delete($user->img_path);
      }
      Arr::pull($validatedAttributes, 'img_path');
      $validatedAttributes = Arr::add($validatedAttributes, 'img_path', 'visitor/images/user/'.$imageName);
    }
    else{
      Arr::pull($validatedAttributes, 'img_path');
    }
    $user->update($validatedAttributes);
    request()->img_path->move(public_path('visitor/images/user'), $imageName);
    return redirect()->route('admin_user.index')
                      ->with('success','Se actualizo la información del usuario');
  }

  public function admin_delete(User $user){
    if($user->id == 1 && Auth::user()->id == $user->id){
      return redirect()->route('admin_user.index')
                        ->with('success','No puedes hacer eso dab');
    }
    if(File::exists($user->img_path)) {
        File::delete($user->img_path);
    }
    $user->delete();
    return redirect()->route('admin_user.index')
                      ->with('success','El usuario ha sido borrado');
  }

}
