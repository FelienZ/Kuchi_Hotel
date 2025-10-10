<?php

namespace App\Http\Controllers;

use App\Models\RoomsModel;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function Rooms(){
        $rooms_data = RoomsModel::all()->toArray();
        //Check Status - Stock -> ini di Booking?
        $data = [
            'rooms' => $rooms_data,
            'title' => 'Rooms Page'
        ];
        return view('pages.roomspage', $data);
    }
    public function RoomDetails($id){
        $room = RoomsModel::find($id)->toArray();
        $data = [
            'title' => $room['type'],
            'info' => $room
        ];
        //detail udah di decode lewat cast model
        return view('pages.detailspage', $data);
    }
}
