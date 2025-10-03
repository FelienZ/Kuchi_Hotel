<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
        Route::get('/create/{id}', [BookingController::class, 'info']);
        Route::get('/confirm/{id}', [BookingController::class, 'confirm']);
    });
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
