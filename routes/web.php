<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\KKHController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboards.index');
});

//firebase
Route::get('/firebase/showData', [FirebaseController::class, 'showData']);

//dashboard
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboards.index');

//kkh
Route::get('/kkh/index', [KKHController::class, 'index'])->name('kkh.index');
