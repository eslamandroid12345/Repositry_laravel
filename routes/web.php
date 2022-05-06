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


Route::get('posts',[\App\Http\Controllers\PostController::class,'all'])->name('posts');
Route::get('posts/delete/{id}',[\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete');
Route::get('posts/user',[\App\Http\Controllers\PostController::class,'showPosts'])->name('posts.user');