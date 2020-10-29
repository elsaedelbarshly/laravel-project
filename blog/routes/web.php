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

Route::get('/home', 'HomeController@index')->name('home');

//categories

Route::get('/categories','CategoryController@index')->name('categories.index');

Route::get('/category/create','CategoryController@create')->name('category.create');
Route::post('/category/store','CategoryController@store')->name('category.store');

Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}','CategoryController@update')->name('category.update');

Route::get('/category/delete/{id}','CategoryController@destroy')->name('category.delete');



//post
Route::get('/posts','PostController@index')->name('posts');

Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/store','PostController@store')->name('post.store');

Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
Route::post('/post/update/{id}','PostController@update')->name('post.update');

Route::get('/post/delete/{id}','PostController@destroy')->name('post.delete');

Route::get('/post/trashed','PostController@trashed')->name('post.trashed');

Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');

Route::get('/post/harddelet/{id}','PostController@harddelet')->name('post.harddelet');