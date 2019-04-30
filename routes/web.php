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
    return view('welcome');
});

Route::get('/flowers', 'FlowersController@index');
// Route::get('flowers/create', 'FlowersController@create');
Route::get('/flowers/{id}', 'FlowersController@show');
// Route::post('/flowers', 'FlowersController@store');
// Route::get('/flowers/{id}/edit', 'FlowersController@edit');
// Route::patch('/flowers', 'FlowersController@update');
// Route::delete('/flowers', 'FlowersController@destroy');

Route::get('/bloomingperiods', 'BloomingPeriodsController@index');

Route::get('/scents', 'ScentsController@index');

Route::get('/stateflowers', 'StateFlowersController@index');

Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::middleware(['authenticated'])->group(function() {
  Route::get('/profile', 'AdminController@index');
  Route::get('/logout', 'LoginController@logout');

  Route::get('/scents/create', 'ScentsController@create');
  Route::post('/scents', 'ScentsController@store');
  Route::get('/scents/{id}/edit', 'ScentsController@edit');
  Route::post('/scents/{id}', 'ScentsController@update');
  Route::get('/scents/{id}/destroy', ['uses' => 'ScentsController@destroy']);

  Route::get('/bloomingperiods/create', 'BloomingPeriodsController@create');
  Route::post('/bloomingperiods', 'BloomingPeriodsController@store');
  Route::get('/bloomingperiods/{id}/edit', 'BloomingPeriodsController@edit');
  Route::post('/bloomingperiods/{id}', 'BloomingPeriodsController@update');
  Route::get('/bloomingperiods/{id}/destroy', ['uses' => 'BloomingPeriodsController@destroy']);
});
