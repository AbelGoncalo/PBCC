<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->prefix('/')->group(
    function () {
        Route::get('/', 'index')->name('home.index');
    }
);