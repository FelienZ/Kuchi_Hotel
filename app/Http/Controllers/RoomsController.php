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
        foreach($rooms_data as &$check):
        //aduhay aneh kali loopingnya
            RoomsModel::where('stock', 0)->update(['status' => 'none']);
            RoomsModel::where('stock', '>', 0)->update(['status' => 'available']);
        endforeach;
        //unset? lepas reference & -> mis. untuk looping lain
        // unset($rooms_data);
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
