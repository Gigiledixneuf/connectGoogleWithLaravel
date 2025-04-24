<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Auth;


// Formulaires
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('', [AuthController::class, 'login']);

// Dashboard 
Route::get('/welcome', [AuthController::class, 'welcome'])->middleware('auth')->name('welcome');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Connexion goooogle
Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
