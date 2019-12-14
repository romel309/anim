<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.visitor_home');
});

Route::get('/entertainment', ['as' => 'entertainment.index', 'uses' => 'EntertainmentController@index']); //mostrar usuario con id
Route::get('/entertainment/{entertainment}', ['as' => 'entertainment.show', 'uses' => 'EntertainmentController@show']);

Route::get('/administrator', function () {
    return view('home.admin_home');
});
