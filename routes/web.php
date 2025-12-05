<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserDashBoardController;

use App\Http\Controllers\User\UserUploadAvatarController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register.show');

Route::post('/register', [RegisterController::class, 'store'])->name('register.form');


Route::get('/login', [LoginController::class, 'index'])->name('login.show');

Route::post('/login', [LoginController::class, 'store'])->name('login.form');


Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/dashboard', [UserDashBoardController::class, 'index'])->name('dashboard');

Route::post('/user-upload-avatar', [UserUploadAvatarController::class, 'store'])->name('upload-avatar');

