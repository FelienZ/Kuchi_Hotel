<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'Home']);
// Route::get('/rooms', [RoomsController::class, 'Rooms']);
// Route::get('/details/{id}', [RoomsController::class, 'RoomDetails']);

//kasih group
Route::prefix('rooms')->group(function(){
    Route::get('', [RoomsController::class, 'Rooms']);
    Route::get('/details/{id}', [RoomsController::class, 'RoomDetails']);
});
Route::prefix('services')->group(function(){
    Route::get('', [ServicesController::class, 'Services']);
    Route::get('/details/{id}', [ServicesController::class, 'ServicesDetail']);
});

Route::middleware('auth')->group(function(){
    Route::prefix('booking')->group(function(){
        Route::post('/matchData', [BookingController::class, 'matchData']);
        Route::post('/complete/{id}', [BookingController::class, 'postReservation']);
        Route::get('/create/{id}', [BookingController::class, 'info']);
        Route::get('/confirm/{id}', [BookingController::class, 'confirm']);
    });
    Route::prefix('reservations')->group(function(){
        Route::get('/{id}', [ReservationController::class, 'Detail']);
        Route::get('/delete/{id}', [ReservationController::class, 'deleteHistory']);
    });
});

// Route::get('/dashboard', [HomeController::class, 'Home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
