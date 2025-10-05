<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Models\ReservationsModel;
use App\Models\RoomsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
            return back()->withInput()->with('message', 'Masukkan Data dengan Benar!');
        }
        $rooms = RoomsModel::where('type', $data['name'])->first()->toArray();
        $item = [
            'title' => 'Confirm Booking - '.$rooms['type'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'name' => $data['name'],
            'durasi' => Carbon::parse($data['checkin'])->diffInDays($data['checkout']),
            'rooms' => $rooms,
            'price' => $rooms['price'] * (Carbon::parse($request->input('cekin'))->diffInDays(Carbon::parse($request->input(key: 'cekout'))))
        ];
        if($item['durasi'] < 1){
             return back()->withInput()->with('message', 'Reservasi Minimal 1 x 24 Jam');
        }
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
            'durasi' => Carbon::parse($request->input('cekin'))->diffInDays(Carbon::parse($request->input(key: 'cekout'))),
            'price' => $item['price'] * (Carbon::parse($request->input('cekin'))->diffInDays(Carbon::parse($request->input(key: 'cekout'))))
        ];
        if($data['checkin'] == null || $data['checkout'] == null){
            return back()->withInput()->with('message', 'Masukkan Data dengan Benar!');
        }
        if($data['durasi'] < 1){
            return back()->withInput()->with('message', 'Reservasi minimal 1 x 24 Jam');
        }
        return view('pages.confirmBooking', $data);
    }
    public function postReservation($id, Request $request){
        $data = [
            'id' => Str::uuid(),
            'room_id' => $id,
            'user_id' => Auth::id(),
            'durasi' => Carbon::parse($request->input('cekin'))->diffInDays(Carbon::parse($request->input(key: 'cekout'))),
            'sewa' => $request->input('price')
        ];
        $matchRoom = RoomsModel::find($id)->toArray();
        if($data['durasi'] < 1){
            return back()->withInput()->with('message', 'Reservasi minimal 1 x 24 Jam');
        }
        if($data['sewa'] != ($matchRoom['price'] * $data['durasi'])){
            return back()->withInput()->with('message', 'Data Invalid!');
        }
        ReservationsModel::insert($data);
        return redirect()->to('/')->with('success', 'Selamat Anda Berhasil Memesan!');
    }
}
