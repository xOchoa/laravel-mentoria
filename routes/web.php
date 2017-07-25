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
use \App\Http\Middleware\MyMiddle;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');
Route::get('users','UserController@index')->name('user.index')->middleware(MyMiddle::class.':admin','auth.basic');
Route::get('user/{id}','UserController@show')->name('user.show');
Route::post('store-user','UserController@store')->name('user.store');
Route::put('update-user/{id}','UserController@update')->name('user.update');
Route::get('hash','UserController@hash')->name('user.hash');

Route::get('create','Auth\RegisterController@create');
Route::get('login','Auth\RegisterController@showLoginForm');

Route::get('responses',function(){
    $data = ['hola'=>'Saludo','arreglo'=> [1,2,3]];
    return view('admin.roles',$data);



    return response($data);
    return "Hola";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/products','ProductsController');

//Route::put('products/{id}/{param2}');