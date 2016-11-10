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

Route::get('/', 'MainController@home');

Route::resource('products', 'ProductsController');
/*
	GET  /products => index
	POST /products => store
	GET  /products/create => Formulario para crear

	GET  /products/:id => Mostrar un producto con ID
	GET  /products/:id/edit
	PUT/PATCH / proucts/:id
	DELETE /products/:id

 */

Auth::routes();

Route::get('/home', 'HomeController@index');
