<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profiles\ProfilesController;
use App\Http\Controllers\User\UserUploadAvatarController;
use App\Http\Middleware\DashBoardMiddleware;
use App\Http\Middleware\isAlreadyLogin;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboadController::class, 'index'])->name('dashboard')->middleware(DashBoardMiddleware::class);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::post('/user-upload-avatar', [UserUploadAvatarController::class, 'store'])->name('upload-avatar');

Route::middleware([isAlreadyLogin::class])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.show');

    Route::post('/login', [LoginController::class, 'store'])->name('login.form');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.show');

    Route::post('/register', [RegisterController::class, 'store'])->name('register.form');


});

Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('{id}', [ProfilesController::class, 'single'])->name('single');
});
