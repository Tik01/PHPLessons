<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace'=>'App\Http\Controllers'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group(['namespace'=>'App\Http\Controllers\Post','middleware'=>'jwt.auth'], function (){
    Route::get('/posts','IndexController');
    Route::get('/create', action:'CreateController')->name('post.create');
    Route::post('/posts', action:'StoreController')->name('post.store');
    Route::get('/posts/{post}', action:'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', action:'EditController')->name('post.edit');
    Route::patch('/posts/{post}', action:'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', action:'DestroyController')->name('post.delete');
});
