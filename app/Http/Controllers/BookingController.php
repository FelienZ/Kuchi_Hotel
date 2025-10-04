<?php

namespace App\Http\Controllers;

use App\Models\RoomsModel;
use Carbon\Carbon;
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
    public function matchData(Request $request){
        $data = [
            'checkin' => $request->input('cekin'),
            'checkout' => $request->input('cekout'),
            'name' => $request->input('roomtype')
        ];
        if($data['checkin'] == null || $data['checkout'] == null || $data['name'] == null){
            return back()->with('message', 'Masukkan Data dengan Benar!');
        }
        $rooms = RoomsModel::where('type', $data['name'])->first()->toArray();
        $item = [
            'title' => 'Confirm Booking - '.$rooms['type'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'name' => $data['name'],
            'durasi' => Carbon::parse($data['checkin'])->diffInDays($data['checkout']),
            'rooms' => $rooms
        ];
        return view('pages.confirmBooking', $item);
    }
    public function confirm($id, Request $request){
        $item = RoomsModel::find($id )->toArray();
        $data = [
            'title' => 'Confirm Booking - '.$item['type'],
            'name' => $request->input('roomtype'),
            'rooms' => $item,
            'checkin' => $request->input('cekin'),
            'checkout' =>$request->input( 'cekout'),
            'durasi' => Carbon::parse($request->input('cekin'))->diffInDays(Carbon::parse($request->input(key: 'cekout')))
        ];
        if($data['checkin'] == null || $data['checkout'] == null){
            return back()->with('message', 'Masukkan Data dengan Benar!');
        }
        return view('pages.confirmBooking', $data);
    }
}
