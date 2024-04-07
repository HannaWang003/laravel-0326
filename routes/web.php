<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;

Route::get('/', function () {
    return view('animal.index');
});
Route::resource('animals', AnimalController::class);
Route::resource('cats', CatController::class);
Route::resource('dogs', DogController::class);
