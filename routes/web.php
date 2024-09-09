<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('open-weather/search', [HomeController::class, 'openWeatherSearch'])->name('openWeather.search');
Route::get('four-square/search', [HomeController::class, 'fourSquareSearch'])->name('fourSquare.search');
