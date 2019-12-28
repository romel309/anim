<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entertainment;
use App\Catalog;
use Auth;

class MessageController extends Controller
{
  public function store_entertainment_message(Entertainment $entertainment){
    $validatedAttributes = request()->validate([
      'message' => 'required|string|max:1000|min:1',
    ]);
    $entertainment->entertainment_messages()->attach(Auth::user()->id, ['message' => request()->message]);
    return redirect()->route('entertainment.show', $entertainment->id)
                     ->with('success','Se agregó el mensaje exitosamente');
  }

  public function update_entertainment_message(Entertainment $entertainment){
    $validatedAttributes = request()->validate([
      'rating' => 'required|integer|max:10|min:1',
    ]);
    $entertainment->entertainment_messages()->updateExistingPivot(Auth::user()->id, ['message' => request()->message]);
    return redirect()->route('entertainment.show', $entertainment->id)
                     ->with('success','Se actualizó el mensaje exitosamente');
  }

  public function store_catalog_message(Catalog $catalog){
    $validatedAttributes = request()->validate([
      'message' => 'required|string|max:1000|min:1',
    ]);
    $catalog->catalog_messages()->attach(Auth::user()->id, ['message' => request()->message]);
    return redirect()->route('catalog.show', $catalog->id)
                     ->with('success','Se agregó el mensaje exitosamente');
  }

  public function update_catalog_message(Catalog $catalog){

  }

}
