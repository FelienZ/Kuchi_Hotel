<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'Home']);
Route::post('/home/booking', [HomeController::class, 'Booking']);
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