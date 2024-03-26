<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('animals', AnimalController::class);
