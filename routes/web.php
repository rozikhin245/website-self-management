<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\targetController;
use App\Http\Controllers\financeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\toDoListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/finance', financeController::class);
    Route::get('/finance-chart', [FinanceController::class, 'getFinanceData']);

    Route::resource('/target', targetController::class);

    Route::resource('/bookDiary', DiaryController::class);
    // Route::get('/Book_Diary/lihat', [DiaryController::class, 'lihat'])->name('bookDiary.lihat');

    Route::post('/favorite/{diary}', [FavoriteController::class, 'toggleFavorite'])->name('favorite.toggle');
    Route::get('/favorite-diaries', [FavoriteController::class, 'favoriteDiaries'])->name('favorite.index');

    Route::resource('/todolist', toDoListController::class);
});

require __DIR__ . '/auth.php';
