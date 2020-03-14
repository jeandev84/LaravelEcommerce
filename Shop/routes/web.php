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

# Home
Route::get('/', 'HomeController@index');


# Products
Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');

