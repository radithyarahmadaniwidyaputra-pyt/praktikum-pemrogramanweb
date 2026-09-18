<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

Route::resource('kamar', KamarController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});