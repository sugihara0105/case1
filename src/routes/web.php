<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FleamarketController;

Route::get('/', [FleamarketController::class, 'products']);
Route::get('/login', [FleamarketController::class, 'login']);
Route::get('/register', [FleamarketController::class, 'register']);
Route::post('/login', [FleamarketController::class, 'login2']);
Route::post('/register', [FleamarketController::class, 'register2']);

Route::middleware('auth')->group(function () {
    
});