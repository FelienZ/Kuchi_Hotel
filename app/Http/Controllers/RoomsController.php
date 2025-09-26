<?php

namespace App\Http\Controllers;

use App\Models\RoomsModel;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function showRooms(){
        $data = [
            'rooms' => RoomsModel::all(),
            'title' => 'Rooms Page'
        ];
        return view('rooms.roomspage', $data);
    }
}
