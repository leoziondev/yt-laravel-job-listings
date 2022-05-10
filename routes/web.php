<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');

Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

Route::get('/register', [UserController::class, 'create'])->name('users.register');
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/login', [UserController::class, 'authenticate'])->name('users.authenticate');
