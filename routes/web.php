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

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::get('/posts/{post}', 'PostController@show');
Route::delete('/posts/{post}', 'PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/categories', 'CategoryController@index');
Route::post('/categories/create', 'CategoryController@store');
