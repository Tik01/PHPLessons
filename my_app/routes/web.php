<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts', action:'PostController@index')->name('post.index');
Route::get('/main', action:'MainController@index')->name('main.index');
Route::get('/contact', action:'ContactController@index')->name('contact.index');
Route::get('/about', action:'AboutController@index')->name('about.index');



Route::get('/create', action:'PostController@create');
Route::post('/posts', action:'PostController@store')->name('post.store');
Route::get('/read', action:'PostController@ReadAll');
Route::get('/getId', action:'PostController@GetById');
Route::get('/update', action:'PostController@Update');
Route::get('/delete', action:'PostController@Delete');
Route::get('/restore', action:'PostController@Restore');
Route::get('/first', action:'PostController@first_create');
Route::get('/update_create', action:'PostController@update_create');


