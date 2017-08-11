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
/*
 * Las rutas pueden ser utilizadas como, donde en $callback es posible indicar la especifica funcion de un controlador o en su caso una funcion directamente
 *  Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
 * */
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

/*
 *  Una ves realizado el comando de "php artisan make:auth" laravel nos proveera de funcionamiento relacionado a su
 *  autenticacion estandar en las cuales se incluye login, logout, registro...
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Genera las rutas estandar de acuerdo al nombre y controlador indicado
 *  GET	        /products	                index	    products.index      -   Display all records
    GET	        /products/create	        create  	products.create     -   Display the form
    POST	    /products	                store	    products.store      -   Store for the first time
    GET	        /products/{photo}	        show	    products.show       -   Display the record
    GET	        /products/{photo}/edit	    edit	    products.edit       -   Display the record in the form
    PUT/PATCH	/products/{photo}	        update	    products.update     -   Update the changes
    DELETE	    /products/{photo}	        destroy	    products.destroy    -   Destroy the record
 */
Route::resource('/products','ProductsController');

#Route::resource('/details','DetailController');
Route::put('details/{id}', 'DetailController@update')->name('details.update');
Route::get('details/{id}', 'DetailController@index')->name('details');
Route::get('details/{id}/store', 'DetailController@store')->name('details.store');
Route::get('details/{id}/delete', 'DetailController@destroy')->name('details.delete');

//Route::put('products/{id}/{param2}');