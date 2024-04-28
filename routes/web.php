<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafe', [CafeController::class, 'home'])->name('cafes.home');

Route::get('/register', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.create');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login'); 
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/cafes', [CafeController::class, 'index'])->name('cafes.index');
    Route::get('/cafes/new', [CafeController::class, 'create'])->name('cafes.create');
    Route::post('/cafes', [CafeController::class, 'store'])->name('cafes.store');
    Route::get('/cafes/{id}', [CafeController::class, 'show'])->name('cafes.show');
    Route::get('/cafes/{id}/edit', [CafeController::class, 'edit'])->name('cafes.edit');
    Route::post('/cafes/{id}', [CafeController::class, 'update'])->name('cafes.update');
    Route::delete('/cafes/{id}', [CafeController::class, 'delete'])->name('cafes.delete');
    Route::post('/profile/{id}', [ProfileController::class, 'toggleFavorites'])->name('profile.toggleFavorites');
    Route::post('/cafes/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/cafes/{id}/comments', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/cafes/{id}/comments', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/cafes/{id}/comments/edit', [CommentController::class, 'edit'])->name('comments.edit');
}); 


