<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\OrderController;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $isLoggedIn = Auth::check();
    $content = Content::where('name', 'home')->firstOrFail();
    return view('welcome', ['isLoggedIn' => $isLoggedIn, 'content' => $content]);
})->name('root');

Route::group(['prefix' => 'orders'], function () {
    Route::get('/', [OrderController::class, 'index'])
        ->middleware('auth')
        ->name('orders.index');

    Route::get('/create', [OrderController::class, 'create'])->name('orders.create');

    Route::post('/', [OrderController::class, 'store'])->name('orders.store');

    Route::get('/{slug}', [OrderController::class, 'show'])
        ->middleware('auth')
        ->name('orders.show');

    Route::delete('/{slug}', [OrderController::class, 'destroy'])
        ->middleware('auth')
        ->name('orders.destroy');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contents/{slug}/edit', [ContentController::class, 'edit'])
    ->middleware('auth')
    ->name('cms.edit');
Route::put('contents/{slug}', [ContentController::class, 'update'])
    ->middleware('auth')
    ->name('cms.update');
