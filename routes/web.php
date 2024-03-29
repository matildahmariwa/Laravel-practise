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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/index','PagesController@index');
Route::get('/services','PagesController@services');
Route::resource('posts','PostController');
Route::post('posts','PostController@store')->name('post.store');
Route::get('/register','RegisterController@register');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
