<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransaksiSensorController;
use Illuminate\Http\Request;

// Route untuk mendapatkan data user (gunakan middleware Sanctum jika ada otentikasi)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route API untuk Transaksi Sensor
Route::apiResource('/posts', TransaksiSensorController::class);
