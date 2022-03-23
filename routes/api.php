<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\FilterCarController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'cars'], static function () {
    Route::get('', [CarController::class, 'index']);
    Route::post('', [CarController::class, 'store']);
    Route::get('/types', CarTypeController::class);
    Route::get('/filters', FilterCarController::class);
    Route::get('{car}', [CarController::class, 'show']);
    Route::put('{car}', [CarController::class, 'update']);
    Route::delete('{car}', [CarController::class, 'destroy']);
});
