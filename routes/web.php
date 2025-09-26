<?php

use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'title' => 'Kuchi Hotel'
    ];
    return view('Home.Homepage', $data);
});

Route::get('/rooms', [RoomsController::class, 'showRooms']);