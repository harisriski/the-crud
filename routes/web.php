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

Route::get('/', 'ProductController@home');

Route::get('/products', 'ProductController@viewProduct');

Route::get('/edit/{id}', 'ProductController@edit');

Route::post('/store', 'ProductController@store');

Route::patch('/update/{id}', 'ProductController@update');

Route::delete('/delete/{id}', 'ProductController@delete');

Route::get('/create-category', 'CategoryController@create');

Route::get('/category', 'CategoryController@index');

Route::post('/category-store', 'CategoryController@store');

Route::delete('/category-delete/{id}', 'CategoryController@delete');