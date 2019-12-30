<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use App\User;
use App\Entertainment;
use Auth;
use Hash;
use App;

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
    $hashPassword = Hash::make(Arr::pull($validatedAttributes, 'password'));
    $validatedAttributes = Arr::add($validatedAttributes, 'password', $hashPassword);
    Arr::pull($validatedAttributes, 'img_path');
    if (App::environment('local')){
      $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
      $validatedAttributes = Arr::add($validatedAttributes, 'img_path', 'visitor/images/user/'.$imageName);
      request()->img_path->move(public_path('visitor/images/user'), $imageName);
    }
    if (App::environment('production')){
      $path = Storage::disk('s3')->putFile('user', request()->img_path, 'public');
      $url = Storage::disk('s3')->url($path);
      $validatedAttributes = Arr::add($validatedAttributes, 'img_path', $url);
    }
    User::create($validatedAttributes);
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
      Arr::pull($validatedAttributes, 'img_path');
      if (App::environment('local')){
        $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
        $validatedAttributes = Arr::add($validatedAttributes, 'img_path', 'visitor/images/user/'.$imageName);
        if(File::exists($user->img_path)) {
            File::delete($user->img_path);
        }
        request()->img_path->move(public_path('visitor/images/user'), $imageName);
        $validatedAttributes = Arr::add($validatedAttributes, 'img_path', 'visitor/images/user/'.$imageName);
      }
      if (App::environment('production')){
        $aws_url = env('AWS_URL', false);
        $path = Str::after($user->img_path, $aws_url);
        if(Storage::disk('s3')->exists($path)){
          Storage::disk('s3')->delete($path);
        }
        $path = Storage::disk('s3')->putFile('user', request()->img_path, 'public');
        $url = Storage::disk('s3')->url($path);
        $validatedAttributes = Arr::add($validatedAttributes, 'img_path', $url);
      }
    }
    else{
      Arr::pull($validatedAttributes, 'img_path');
    }
    $user->update($validatedAttributes);
    return redirect()->route('admin_user.index')
                      ->with('success','Se actualizo la información del usuario');
  }

  public function admin_delete(User $user){
    if($user->id == 1 && Auth::user()->id == $user->id){
      return redirect()->route('admin_user.index')
                        ->with('success','No puedes hacer eso dab');
    }
    if (App::environment('local')){
      if(File::exists($user->img_path)) {
          File::delete($user->img_path);
      }
    }
    if (App::environment('production')){
      $aws_url = env('AWS_URL', false);
      $path = Str::after($user->img_path, $aws_url);
      if(Storage::disk('s3')->exists($path)){
        Storage::disk('s3')->delete($path);
      }
    }
    $user->delete();
    return redirect()->route('admin_user.index')
                      ->with('success','El usuario ha sido borrado');
  }

}
