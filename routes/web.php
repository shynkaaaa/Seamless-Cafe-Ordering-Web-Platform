<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SingleItemPageController;

Route::get('/coffees', [MainPageController::class, 'index']);
Route::get('/coffees/{id}', [MainPageController::class, 'show']);
Route::post('/coffees', [MainPageController::class, 'store']);
Route::put('/coffees/{id}', [MainPageController::class, 'update']);
Route::patch('/coffees/{id}', [MainPageController::class, 'update']);
Route::delete('/coffees/{id}', [MainPageController::class, 'destroy']);

Route::get('/teas', [MainPageController::class, 'index']);
Route::get('/teas/{id}', [MainPageController::class, 'show']);
Route::post('/teas', [MainPageController::class, 'store']);
Route::put('/teas/{id}', [MainPageController::class, 'update']);
Route::patch('/teas/{id}', [MainPageController::class, 'update']);
Route::delete('/teas/{id}', [MainPageController::class, 'destroy']);

Route::get('/single-item/{type}/{id}', [SingleItemPageController::class, 'show']);
