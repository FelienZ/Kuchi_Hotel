<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function showRooms(){
        return view('rooms.roomspage');
    }
}
