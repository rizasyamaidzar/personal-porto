<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('/portofolio/{id}', [HomeController::class, 'showPortofolio'])->name('portofolio.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
