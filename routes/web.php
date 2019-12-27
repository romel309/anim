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

Route::get('/user', ['as' => 'user.index', 'uses' => 'UserController@index']);
Route::get('/user/{user}', ['as' => 'user.show', 'uses' => 'UserController@show']);

Route::get('/tag', ['as' => 'tag.index', 'uses' => 'TagController@index']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
  Route::get('/administrator', ['as' => 'home_admin.index', 'uses' => 'AdminHomeController@index']);
  // All routes unser
  Route::get('/administrator/user', ['as' => 'admin_user.index', 'uses' => 'UserController@admin_index']);
  Route::get('/administrator/user/create', ['as' => 'admin_user.create', 'uses' => 'UserController@admin_create']);
  Route::post('/administrator/user/store', ['as' => 'admin_user.store', 'uses' => 'UserController@admin_store']);
  Route::get('/administrator/user/edit/{user}', ['as' => 'admin_user.edit', 'uses' => 'UserController@admin_edit']);
  Route::post('/administrator/user/update/{user}', ['as' => 'admin_user.update', 'uses' => 'UserController@admin_update']);
  Route::post('/administrator/user/delete/{user}', ['as' => 'admin_user.delete', 'uses' => 'UserController@admin_delete']);
  //All routes carousel
  Route::get('/administrator/carousel', ['as' => 'admin_carousel.index', 'uses' => 'CarouselController@admin_index']);
  Route::get('/administrator/carousel/create', ['as' => 'admin_carousel.create', 'uses' => 'CarouselController@admin_create']);
  Route::post('/administrator/carousel/store', ['as' => 'admin_carousel.store', 'uses' => 'CarouselController@admin_store']);
  Route::get('/administrator/carousel/edit/{carousel}', ['as' => 'admin_carousel.edit', 'uses' => 'CarouselController@admin_edit']);
  Route::post('/administrator/carousel/update/{carousel}', ['as' => 'admin_carousel.update', 'uses' => 'CarouselController@admin_update']);
  Route::post('/administrator/carousel/delete/{carousel}', ['as' => 'admin_carousel.delete', 'uses' => 'CarouselController@admin_delete']);
  //All routes catalogs
  Route::get('/administrator/catalog', ['as' => 'admin_catalog.index', 'uses' => 'CatalogController@admin_index']); //mostrar entretenimiento en admin
  Route::get('/administrator/catalog/create', ['as' => 'admin_catalog.create', 'uses' => 'CatalogController@admin_create']); //mostrar entretenimiento en admin
  Route::post('/administrator/catalog/store', ['as' => 'admin_catalog.store', 'uses' => 'CatalogController@admin_store']); //mostrar entretenimiento en admin
  Route::get('/administrator/catalog/edit/{catalog}', ['as' => 'admin_catalog.edit', 'uses' => 'CatalogController@admin_edit']); //mostrar entretenimiento en admin
  Route::post('/administrator/catalog/update/{catalog}', ['as' => 'admin_catalog.update', 'uses' => 'CatalogController@admin_update']); //mostrar entretenimiento en admin
  Route::get('/administrator/catalog/editorder/{catalog}', ['as' => 'admin_catalog.editorder', 'uses' => 'CatalogController@admin_edit_order']);
  Route::post('/administrator/catalog/updateorder/{catalog}', ['as' => 'admin_catalog.updateorder', 'uses' => 'CatalogController@admin_update_order']);
  Route::post('/administrator/catalog/delete/{catalog}', ['as' => 'admin_catalog.delete', 'uses' => 'CatalogController@admin_delete']); //mostrar entretenimiento en admin
  //All routes entertainment
  Route::get('/administrator/entertainment', ['as' => 'admin_entertainment.index', 'uses' => 'EntertainmentController@admin_index']); //mostrar entretenimiento en admin
  Route::get('/administrator/entertainment/create', ['as' => 'admin_entertainment.create', 'uses' => 'EntertainmentController@admin_create']); //crear tag en admin
  Route::post('/administrator/entertainment/store', ['as' => 'admin_entertainment.store', 'uses' => 'EntertainmentController@admin_store']); //crear tag en admin
  Route::get('/administrator/entertainment/edit/{entertainment}', ['as' => 'admin_entertainment.edit', 'uses' => 'EntertainmentController@admin_edit']); //crear tag en admin
  Route::post('/administrator/entertainment/update/{entertainment}', ['as' => 'admin_entertainment.update', 'uses' => 'EntertainmentController@admin_update']); //crear tag en admin
  Route::post('/administrator/entertainment/delete/{entertainment}', ['as' => 'admin_entertainment.delete', 'uses' => 'EntertainmentController@admin_delete']); //crear tag en admin
  //All routes of tags
  Route::get('/administrator/tag', ['as' => 'admin_tag.index', 'uses' => 'TagController@admin_index']); //mostrar todos tag en admin
  Route::get('/administrator/tag/create', ['as' => 'admin_tag.create', 'uses' => 'TagController@admin_create']); //crear tag en admin
  Route::post('/administrator/tag/store', ['as' => 'admin_tag.store', 'uses' => 'TagController@admin_store']); //guardar datos tag en admin
  Route::get('/administrator/tag/edit/{tag}', ['as' => 'admin_tag.edit', 'uses' => 'TagController@admin_edit']); //editar tag en admin
  Route::post('/administrator/tag/update/{tag}', ['as' => 'admin_tag.update', 'uses' => 'TagController@admin_update']); //guardar datos tag en admin
  Route::post('/administrator/tag/delete/{tag}', ['as' => 'admin_tag.delete', 'uses' => 'TagController@admin_delete']); //guardar datos tag en admin
});
