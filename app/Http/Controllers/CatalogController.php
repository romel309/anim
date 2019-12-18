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
    public function show(Catalog $catalog){
        return view('catalog.show', ['catalog' => $catalog]);
        //return $catalog->entertainments;
    }
}
