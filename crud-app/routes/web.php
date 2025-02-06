<?php
use App\Http\Controllers\BootsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boots', BootsController::class);
