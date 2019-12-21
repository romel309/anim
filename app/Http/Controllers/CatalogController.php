<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entertainment;
use App\Catalog;

class CatalogController extends Controller
{
    public function index(){
        $catalogs = Catalog::paginate(12);
        return view('catalog.index', ['catalogs' => $catalogs]);
    }

    public function admin_index(){
        $catalogs = Catalog::paginate(12);
        return view('catalog.index', ['catalogs' => $catalogs]);
    }

    public function show(Catalog $catalog){
        return view('catalog.show', ['catalog' => $catalog]);
        //return $catalog->entertainments;
    }

    public function admin_create(){

    }

    public function admin_store(Catalog $catalog){

    }

    public function admin_edit(){

    }

    public function admin_update(Catalog $catalog){

    }

    public function admin_delete(Catalog $catalog){

    }
}
