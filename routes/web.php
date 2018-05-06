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

Route::get('/', 'CategoryController@index');
Route::get('/category/seed', 'CategoryController@list');
Route::get('/product/category/{id}', 'ProductController@category');
Route::get('/product/create', 'ProductController@create');
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/store', 'ProductController@store')->name('product.store');
