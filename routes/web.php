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

Route::group(['layout' => 'layouts.livewire'], function () {
    Route::middleware('guest')->group(function () {
        Route::livewire('/login', 'login')->name('login');
        Route::livewire('/register', 'register')->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::livewire('/posts/create', 'post.create-post')->name('post.create');
        Route::livewire('/posts/my-posts', 'post.owned-posts')->name('post.owned');
    });

    Route::livewire('/', 'post.list-all-posts')->name('home');
    Route::livewire('/posts/{id}', 'post.show-post')->name('post.show');
});