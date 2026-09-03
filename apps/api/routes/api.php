<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::group([
//     'prefix' => 'categories',
// ], function(){
//     Route::get('categories', [CategoryController::class, 'index']);
//     Route::post('categories', [CategoryController::class, 'store']);

// Route::group([
//     'prefix' => '/{id}',
// ], function(){
//     Route::get('categories/{id}', [CategoryController::class, 'show']);
//     Route::put('categories/{id}', [CategoryController::class, 'update']);
//     Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
//     });
// });

Route::apiResource('categories', CategoryController::class);