<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'ProductsController@index');
Route::post('/addproduct', 'ProductsController@add_products');
Route::get('/delete/{id}', 'ProductsController@delete');
Route::get('/add', function(){
	return view('addproduct');
});


