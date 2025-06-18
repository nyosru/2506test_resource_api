<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CommandController;

Route::post('/migrate-fresh-seed', [CommandController::class, 'migrateFreshSeed']);


Route::get('/', function () {
    return view('welcome');
});
