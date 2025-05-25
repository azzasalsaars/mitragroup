<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StokProdukController;

Route::get('/stokproduk', [StokProdukController::class, 'index']);
Route::post('/stokproduk', [StokProdukController::class, 'store']);
Route::get('/stokproduk/{id}', [StokProdukController::class, 'show']);
Route::put('/stokproduk/{id}', [StokProdukController::class, 'update']);
Route::delete('/stokproduk/{id}', [StokProdukController::class, 'destroy']);
