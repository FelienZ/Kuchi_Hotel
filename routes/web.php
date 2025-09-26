<?php

use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.Homepage');
});

Route::get('/rooms', [RoomsController::class, 'showRooms']);