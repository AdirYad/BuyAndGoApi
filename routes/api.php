<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilterCarController;
use Illuminate\Support\Facades\Route;

Route::get('admin/auth', [AdminAuthController::class, 'auth']);

Route::group(['prefix' => 'cars'], static function () {
    Route::group(['middleware' => ['admin']], static function () {
        Route::post('', [CarController::class, 'store']);
        Route::put('{car}', [CarController::class, 'update']);
        Route::delete('{car}', [CarController::class, 'destroy']);
    });

    Route::get('', [CarController::class, 'index']);
    Route::get('/types', CarTypeController::class);
    Route::get('/filters', FilterCarController::class);
    Route::get('{car}', [CarController::class, 'show']);
});

Route::get('contact', [ContactController::class, 'store']);
