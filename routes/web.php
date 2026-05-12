<?php

use App\Http\Controllers\ModulesController;
use App\Http\Controllers\IndustriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');})->name('home');
Route::get('/about-us', function () {return view('about');})->name('about');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/terms-and-conditions', function () {return view('terms-and-conditions');})->name('terms');
Route::get('/privacy-policy', function () {return view('privacy-policy');})->name('privacy');
Route::get('/refund-policy', function () {return view('refund-policy');})->name('refunds');

// Modules Group
Route::prefix('modules')->group(function () {
    Route::get('/', [ModulesController::class, 'index'])->name('modules.index');
    Route::get('/{slug}', [ModulesController::class, 'show'])->name('modules.show');
});

// Industries Group
Route::prefix('industries')->group(function () {
    Route::get('/', [IndustriesController::class, 'index'])->name('industries.index');
    Route::get('/{slug}', [IndustriesController::class, 'show'])->name('industries.show');
});