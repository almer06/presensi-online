<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('auth');

Route::middleware(['guest'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/login', 'view_login')->name('view.login');
        Route::post('/login', 'login')->name('login');
        Route::get('/sign-up', 'view_register')->name('view.register');
        Route::post('/sign-up', 'register')->name('register');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
    Route::get('/hello', function () {
        return 'Hello World';
    });
});


