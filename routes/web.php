<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\MarketerController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('marketers')->controller(MarketerController::class)->name('marketers.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{marketer}', 'show')->name('show');
        Route::post('/{marketer}', 'update')->name('update');
        Route::delete('/{marketer}', 'destroy')->name('destroy');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
