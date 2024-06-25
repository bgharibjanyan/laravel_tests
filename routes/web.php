<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::view('/','welcome');

Route::view('/posts', function () {
    return view('posts.index');
});


Route::view('/auth/register','auth.register')->name('register');

Route::view('/auth/login','auth.login')->name('login');

Route::get('/test', [TestController::class , 'index']);