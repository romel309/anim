<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Entertainment;
use Auth;

class RatingController extends Controller
{
    public function store(Entertainment $entertainment){
      $validatedAttributes = request()->validate([
        'rating' => 'required|integer|max:10|min:1',
      ]);
      $entertainment->ratings()->attach(Auth::user()->id, ['rating' => request()->rating]);
      return redirect()->route('entertainment.show', $entertainment->id)
                       ->with('success','Se agregó el rating exitosamente');
    }
    public function update(Entertainment $entertainment){
      $validatedAttributes = request()->validate([
        'rating' => 'required|integer|max:10|min:1',
      ]);
      $entertainment->ratings()->updateExistingPivot(Auth::user()->id, ['rating' => request()->rating]);
      return redirect()->route('entertainment.show', $entertainment->id)
                       ->with('success','Se actualizó el rating exitosamente');
    }
}
