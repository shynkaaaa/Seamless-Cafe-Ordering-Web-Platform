<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

Route::get('/coffees', [MainPageController::class, 'index']);
Route::get('/coffees/{id}', [MainPageController::class, 'show']);
Route::post('/coffees', [MainPageController::class, 'store']);
Route::put('/coffees/{id}', [MainPageController::class, 'update']);
Route::patch('/coffees/{id}', [MainPageController::class, 'update']);
Route::delete('/coffees/{id}', [MainPageController::class, 'destroy']);
