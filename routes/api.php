<?php


use App\Http\Controllers\Api\GoodController;
use App\Http\Controllers\CommandController;
use Illuminate\Support\Facades\Route;

Route::get('/prices', [GoodController::class, 'getPrices']);
Route::get('/migrate-fresh-seed', [CommandController::class, 'migrateFreshSeed']);

Route::get('check', function () {
    return ['message' => 'API работает!'];
});
