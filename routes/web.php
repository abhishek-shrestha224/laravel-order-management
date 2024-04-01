<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $isLoggedIn = Auth::check(); // Check if the user is logged in
    return view('welcome', ['isLoggedIn' => $isLoggedIn]); // Pass the variable to the view
});

Route::get('/orders', [OrderController::class, 'index'])->middleware('auth');
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{slug}', [OrderController::class, 'show'])->middleware('auth');
Route::delete('/orders/{slug}', [OrderController::class, 'destroy'])->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contents/edit/home', [ContentController::class, 'edit'])->middleware('auth');
