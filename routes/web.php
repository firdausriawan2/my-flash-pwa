<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/bill/detail', [BillController::class, 'detail'])->name('bill.detail');
    Route::get('/bill/payment', [BillController::class, 'payment'])->name('bill.payment');
    Route::get('/bill/payment/virtual-account/bri', [BillController::class, 'getVirtualAccount'])->name('bill.payment.virtual-account');


    Route::get('/bill', [BillController::class, 'index'])->name('bill');

    Route::controller(SupportController::class)->group(function () {
        Route::get('/support', 'index')->name('support');
        Route::get('/support/contact', 'contact')->name('support.contact');
    });

    Route::get('/account', [AccountController::class, 'index'])->name('account');

    Route::controller(App\Http\Controllers\DeviceController::class)->group(function () {
        Route::get('/device', 'index')->name('device.index');
        Route::get('/device/detail', 'detail')->name('device.detail');
    });
});

Route::get('/dashboard', function () {
    // return view('dashboard');
return redirect()->route('home');
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
