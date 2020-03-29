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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index');
Route::get('category/{category}', 'CategoryController@show'); 
Route::get('/new-category', 'CategoryController@create');
Route::post('store-category','CategoryController@store');
Route::get('category/{category}/edit', 'CategoryController@edit');
Route::post('category/{category}/update-category', 'CategoryController@update');
Route::get('category/{category}/destroy', 'CategoryController@delete');
