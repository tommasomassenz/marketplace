<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DetailOrderController;

Route::apiResource('users', UserController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('prodcuts', ProductController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('detail_orders', DetailOrderController::class);
;
