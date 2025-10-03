<?php

namespace App\Http\Controllers;

use App\Models\RoomsModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function info($id){
        $item = RoomsModel::find($id)->toArray();
        $data = [
            'title' => 'Booking - '.$item['type'],
            'rooms' => $item
        ];
        return view('pages.booking', $data);
    }
    public function confirm($id, Request $request){
        $item = RoomsModel::find($id )->toArray();
        $data = [
            'title' => 'Confirm Booking - '.$item['type'],
            'room' => $request->input('roomtype'),
            'checkin' => $request->input('cekin'),
            'checkout' => $request->input('cekout')
        ];
        return view('pages.confirmBooking', $data);
    }
}
