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

Route::get('/create', action:'PostController@AddPerson');
Route::get('/read', action:'PostController@ReadAll');
Route::get('/getId', action:'PostController@GetById');
Route::get('/getId', action:'PostController@GetById');
Route::get('/update', action:'PostController@Update');
Route::get('/delete', action:'PostController@Delete');
Route::get('/restore', action:'PostController@Restore');


