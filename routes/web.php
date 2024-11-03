<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\KKHController;
use App\Http\Controllers\VerifikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboards.index');
});

//authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_post'])->name('login_post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    //firebase
    Route::get('/firebase/showData', [FirebaseController::class, 'showData']);

    //dashboard
    Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboards.index');

    //kkh
    Route::get('/kkh/index', [KKHController::class, 'index'])->name('kkh.index');
    Route::post('/kkh/verification', [KKHController::class, 'verification'])->name('kkh.verification');
    Route::get('/kkh/show/{nik}', [KKHController::class, 'show'])->name('kkh.show');

    //verifikasi
    Route::get('/verifikasi/index', [VerifikasiController::class, 'index'])->name('verifikasi.index');
});
