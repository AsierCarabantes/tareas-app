<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController; // Importar AuthController

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::delete('/delete/{id}', [AuthController::class, 'destroy'])->middleware('auth:sanctum');
Route::patch('/update/{id}', [AuthController::class, 'update'])->middleware('auth:sanctum');