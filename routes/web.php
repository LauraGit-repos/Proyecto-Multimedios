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

//Index routes
Route::get('/','IndexController@index');
Route::get('/pictures','IndexController@pictures');
Route::get('/about','IndexController@about');
Route::get('/contact','IndexController@contact');

// Authentication routes
Auth::routes();

//Products routes
Route::get('/products','ProductController@products');
Route::get('/products/add','ProductController@addProduct');
Route::get('/products/edit/{id}','ProductController@editProduct');
Route::get('/products/sell','ProductController@sellProducts');
Route::get('/products/cart','ProductController@cartProducts');
Route::post('/products/add','ProductController@newProduct');
Route::post('/products/edit','ProductController@changeProduct');
Route::delete('/products/delete/{id}','ProductController@deleteProduct');
Route::get('/products/pay','ProductController@payProducts');

// photographs route
Route::get('/photographs/add','Photographs@photograph');
Route::get('/photographs/all','Photographs@allphotograph');

//Users routes
Route::get('/users','UserController@users');
Route::get('/users/getUsers','UserController@getUsers');