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

// Route::get('/postss','App\Http\Controllers\PostsController@index');

//Route::get('/posts','App\Http\Controllers\PagesController@posts');

Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/posts','App\Http\Controllers\PostsController@index');

Route::resource('posts', 'App\Http\Controllers\PostsController');
//Route::get('/posts/{$id}','App\Http\Controllers\PostsController@index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
