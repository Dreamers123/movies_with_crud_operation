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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movies','MoviesController');
Route::get('profile/{user_name}','ProfileController@index');

Route::get('admin/create', ['uses' => 'AdminController@create']);
Route::get('admin/login', ['uses' => 'AdminController@login']);
//Route::post('admin', ['uses' => 'AdminController@store']);

