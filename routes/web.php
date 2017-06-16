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

Route::resource('user', 'UserController');
Route::get('users','UserController@index')->name('user.index'); 
Route::get('user/{id}','UserController@show')->name('user.show');
Route::post('store-user','UserController@store')->name('user.store');
Route::put('update-user/{id}','UserController@update')->name('user.update');