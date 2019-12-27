<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Carousel;
use Auth;

class CarouselController extends Controller
{
  public function admin_index(){
      $carousel = Carousel::orderBy('created_at','DESC')->paginate(6);
      return view('carousel.admin_index', ['carousel' => $carousel]);
  }

  public function admin_create(){
      return view('carousel.admin_create');
  }

  public function admin_store(){
      //return dd(request()->img_path);
      $validatedAttributes = request()->validate([
        'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'show' => 'required|boolean',
      ]);
      $carousel = new Carousel;
      $imageName = time().'.'.request()->img_path->getClientOriginalExtension();
      $carousel->user_id = Auth::user()->id;
      $carousel->img_path = 'visitor/images/carousel/'.$imageName;
      $carousel->show = request()->show;
      $carousel->save();
      request()->img_path->move(public_path('visitor/images/carousel'), $imageName);
      return redirect()->route('admin_carousel.index')
                        ->with('success','Se agregó la foto  al carousel exitosamente');
  }

  public function admin_edit(Carousel $carousel){
      return view('carousel.admin_edit', ['carousel' => $carousel]);
  }

  public function admin_update(Carousel $carousel){
    $validatedAttributes = request()->validate([
      'show' => 'required|boolean',
    ]);
    $carousel->update($validatedAttributes);
    return redirect()->route('admin_carousel.index')
                      ->with('success','Se editó la foto al carousel exitosamente');
  }

  public function admin_delete(Carousel $carousel){
    if(File::exists($carousel->img_path)) {
        File::delete($carousel->img_path);
    }
    $carousel->delete();
    return redirect()->route('admin_carousel.index')
                      ->with('success','Se eliminó la foto del carousel exitosamente');
  }
}
