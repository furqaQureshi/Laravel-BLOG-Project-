<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return view('layouts.pages.dashboard');
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'admin'], function () {
    Route::get('/home',[UserController::class,'index']);
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
