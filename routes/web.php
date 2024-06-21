<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/bill', [BillController::class, 'index'])->name('bill');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/undefined', function () {
    return view('offline');
});
Route::get('/offline', function () {
    return view('offline');
});

require __DIR__.'/auth.php';
