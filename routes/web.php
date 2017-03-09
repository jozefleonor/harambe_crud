<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/index', 'harambe_crudController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['web']], function() {
  Route::resource('/index','harambe_crudController');
   Route::resource('/authors','harambe_crudController');
});

 