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

Route::get('/', 'ProductsController@index')->name('index');
Route::get('/create_view', 'ProductsController@create')->name('create_view');
Route::post('/db_create', 'ProductsController@db_create')->name('create_db');
Route::delete('/db_delete/{id}', 'ProductsController@db_delete')->name('db_delete');