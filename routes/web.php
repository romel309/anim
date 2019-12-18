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

Route::get('/', ['as' => 'home.show', 'uses' => 'HomeController@index']);
Route::get('/entertainment', ['as' => 'entertainment.index', 'uses' => 'EntertainmentController@index']); //mostrar entretenimiento con id
Route::get('/entertainment/{entertainment}', ['as' => 'entertainment.show', 'uses' => 'EntertainmentController@show']);

Route::get('/catalog', ['as' => 'catalog.index', 'uses' => 'CatalogController@index']); //mostrar entretenimiento con id
Route::get('/catalog/{catalog}', ['as' => 'catalog.show', 'uses' => 'CatalogController@show']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
  Route::get('/administrator', function () {
      return view('home.admin_home');
  });
});
