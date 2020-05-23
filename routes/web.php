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

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@showCreateForm')->name('posts.create');
Route::post('/posts/create', 'PostController@create');

Route::get('/posts/detail/{post}', 'PostController@detail')->name('posts.detail');

Route::get('/posts/detail/{post}/write', 'PostController@showWriteForm')->name('posts.write');
Route::post('/posts/detail/{post}/write', 'PostController@write');

Route::get('/posts/delete/{post}/', 'PostController@showDeleteForm')->name('posts.delete');
Route::post('/posts/delete/{post}/', 'PostController@delete');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
