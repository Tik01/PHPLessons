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

Route::group(['namespace'=>'Post'],function(){
    Route::get('/posts', action:'IndexController')->name('post.index');
    Route::get('/create', action:'CreateController')->name('post.create');
    Route::post('/posts', action:'StoreController')->name('post.store');
    Route::get('/posts/{post}', action:'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', action:'EditController')->name('post.edit');
    Route::patch('/posts/{post}', action:'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', action:'DestroyController')->name('post.delete');
});

Route::group(['namespace'=> 'Admin','prefix'=>'admin'], function (){
   Route::group(['namespace'=>'Post'], function (){
       Route::get('/post','IndexController',)->name('admin.post.index');
       Route::get('/post/create','CreateController',)->name('admin.post.create');
       Route::post('/post/store', action:'StoreController')->name('admin.post.store');
       Route::get('/posts/{post}', action:'ShowController')->name('admin.post.show');

   });
});

Route::get('/main', action:'MainController@index')->name('main.index');
Route::get('/contact', action:'ContactController@index')->name('contact.index');
Route::get('/about', action:'AboutController@index')->name('about.index');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
