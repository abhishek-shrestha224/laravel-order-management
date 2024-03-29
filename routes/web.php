<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('*', fn() => view('not-found'));
