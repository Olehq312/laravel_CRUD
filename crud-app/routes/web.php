<?php
use App\Http\Controllers\BootsController;
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return view('auth.login');
});

Route::resource('boots', BootsController::class);


Route::get('/', [BootsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
