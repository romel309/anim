<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use App\Entertainment;
use App\Catalog;
use Auth;

class CatalogController extends Controller
{
    public function index(){
        $catalogs = Catalog::orderBy('created_at','DESC')->paginate(12);
        return view('catalog.index', ['catalogs' => $catalogs]);
    }

    public function admin_index(){
        $catalogs = Catalog::orderBy('created_at','DESC')->paginate(12);
        return view('catalog.admin_index', ['catalogs' => $catalogs]);
    }

    public function show(Catalog $catalog){
        return view('catalog.show', ['catalog' => $catalog]);
    }

    public function admin_create(){
      $entertainments = Entertainment::all();
      return view('catalog.admin_create', compact('entertainments'));
    }

    public function admin_store(Catalog $catalog){
      $validatedAttributes = request()->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ente' => 'required',
        'ente.*' => 'numeric',
      ]);
      $imageName = time().'.'.request()->thumbnail->getClientOriginalExtension();
      $datatToStore = ([
        'user_id' => Auth::user()->id,
        'name' => request()->name,
        'description' => request()->description,
        'thumbnail' => 'visitor/images/catalog/'.$imageName,
      ]);
      Catalog::create($datatToStore);
      request()->thumbnail->move(public_path('visitor/images/catalog'), $imageName);
      $searchEntertainment = Catalog::where('name', request()->name)->first();
      $allEntertainments = collect();
      $i=1;
      foreach(request()->ente as $singularEnte){
        $allEntertainments->put($singularEnte, ['rank' => $i]);
        $i++;
      }
      $searchEntertainment->entertainments()->sync($allEntertainments);
      return redirect()->route('admin_catalog.index')
                        ->with('success','Se agregó el entretenimiento exitosamente');
    }

    public function admin_edit(Catalog $catalog){
      $entertainments = Entertainment::all();
      $checked = collect();
      foreach ($catalog->entertainments as $che) {
          if($entertainments->contains('name', $che->name)){
            $checked->push($che->id);
          }
      }
      return view('catalog.admin_edit', compact('entertainments', 'catalog', 'checked'));
    }

    public function admin_edit_order(Catalog $catalog){
      return view('catalog.admin_edit_order', compact('catalog'));
    }

    public function admin_update_order(Catalog $catalog){
      $ranked = Catalog::find($catalog->id);
      $validatedAttributes = request()->validate([
        'n.*' => 'numeric|required|min:0|max:100',
      ]);
      $inputs = collect();
      $loop=0;
      foreach (request()->input() as $i){
        if($loop != 0){
          $inputs->push($i);
        }
        $loop++;
      }
      $loop=0;
      foreach ($ranked->entertainments as $ind_r){
        $ranked->entertainments()->updateExistingPivot($ind_r->id, ['rank' => $inputs[$loop]]);
        $loop++;
      }

      return redirect()->route('admin_catalog.index')
                        ->with('success','Se editó el orden exitosamente');
    }

    public function admin_update(Catalog $catalog){
      $validatedAttributes = request()->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ente' => 'required',
        'ente.*' => 'numeric',
      ]);
      if(request()->hasfile('thumbnail')){
        $imageName = time().'.'.request()->thumbnail->getClientOriginalExtension();
        $datatToStore = ([
          'user_id' => Auth::user()->id,
          'name' => request()->name,
          'description' => request()->description,
          'thumbnail' => 'visitor/images/catalog/'.$imageName,
        ]);
        if(File::exists($catalog->thumbnail)) {
            File::delete($catalog->thumbnail);
        }
        $catalog->update($datatToStore);
        request()->thumbnail->move(public_path('visitor/images/catalog'), $imageName);
        $searchCatalog = Catalog::where('name', request()->name)->first();
        $allEntertainments = collect();
        $i=1;
        foreach(request()->ente as $singularEnte){
          $allEntertainments->put($singularEnte, ['rank' => $i]);
          $i++;
        }
        $searchCatalog->entertainments()->sync($allEntertainments);
      }
      else{
        $catalog->update(request()->only('name', 'description'));
        $searchCatalog = Catalog::where('name', request()->name)->first();
        $allEntertainments = collect();
        $i=1;
        foreach(request()->ente as $singularEnte){
          $allEntertainments->put($singularEnte, ['rank' => $i]);
          $i++;
        }
        $searchCatalog->entertainments()->sync($allEntertainments);
      }
      return redirect()->route('admin_catalog.index')
                        ->with('success','Se editó la lista exitosamente');
    }

    public function admin_delete(Catalog $catalog){
      if(File::exists($catalog->thumbnail)) {
          File::delete($catalog->thumbnail);
      }
      $catalog->delete();
      return redirect()->route('admin_catalog.index')
                        ->with('success','La lista ha sido borrada exitosamente');
    }
}
