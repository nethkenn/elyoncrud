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

Route::any('/', 'CrudController@index');
Route::any('/save', 'CrudController@save');
Route::any('/edit/{account}', 'CrudController@edit');
Route::any('/delete/{account}', 'CrudController@delete');
Route::any('/update/{account}', 'CrudController@update');


