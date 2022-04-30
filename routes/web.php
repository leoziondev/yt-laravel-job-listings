<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');
