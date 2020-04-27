<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductsController@index');
Route::post('/addproduct', 'ProductsController@add_products');
Route::get('/delete/{id}', 'ProductsController@delete');
Route::get('/add', function(){ return view('addproduct');});
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/showShoppingCart', 'ProductsController@showShoppingCart');