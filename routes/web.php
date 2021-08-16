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

Route::get('/users/{id}', function ($id) {
    return $id;
});

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/shop', 'App\Http\Controllers\PagesController@shop');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/account', 'App\Http\Controllers\PagesController@account');

Route::resource('product','App\Http\Controllers\ProductController');