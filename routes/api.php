<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Product\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {
    Route::post('/login', [LoginController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function() {
        Route::get('/logout', [LoginController::class, 'logout']);

        Route::get('/product', [ProductController::class, 'index']);
        Route::get('/products', [ProductController::class, 'product']);
        Route::post('/product-sort', [ProductController::class, 'productSort']);
        Route::get('/product-group', [ProductController::class, 'productGroup']);
    });
});
