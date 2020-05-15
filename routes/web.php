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

Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/blog/post/{id}', 'blog\PostController@show')->name('blog.show');
Route::get('/blog/category/{id}', 'blog\PostController@category')->name('blog.category');
Route::get('/blog/tag/{id}', 'blog\PostController@tag')->name('blog.tag');


Auth::routes();


// Route::get('category/{category}', 'CategoryController@show'); 
// Route::get('/create', 'CategoryController@create');
// Route::post('store-category','CategoryController@store');
// Route::get('category/{category}/edit', 'CategoryController@edit');
// Route::post('category/{category}/update-category', 'CategoryController@update');
// Route::get('category/{category}/destroy', 'CategoryController@delete');
Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoriesController');
    Route::resource('post', 'PostController');
    Route::get('trashed-post', 'PostController@trashed')->name('trashed-post.index');
    Route::resource('tag', 'TagsController');
    
    
});
ROute::middleware(['auth', 'admin'])->group(function()
{
    Route::get('users.profile', 'UsersController@profile');
    Route::get('users', 'UsersController@index');
    Route::post('users/{user}/update', 'UsersController@update');
});
