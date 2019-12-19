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
  Route::get('/administrator', ['as' => 'home_admin.index', 'uses' => 'AdminHomeController@index']);
  Route::get('/administrator/entertainment', ['as' => 'admin_entertainment.index', 'uses' => 'EntertainmentController@admin_index']); //mostrar entretenimiento en admin
  Route::get('/administrator/tag', ['as' => 'admin_tag.index', 'uses' => 'TagController@admin_index']); //mostrar todos tag en admin
  Route::get('/administrator/tag/create', ['as' => 'admin_tag.create', 'uses' => 'TagController@admin_create']); //editar tag en admin
  Route::get('/administrator/tag/edit/{tag}', ['as' => 'admin_tag.edit', 'uses' => 'TagController@admin_edit']); //editar tag en admin
});
