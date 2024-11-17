<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');
Route::get('/Myfirstlaravel', function () {
    return view('MyfirstView');
});
