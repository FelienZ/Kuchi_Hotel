<?php

namespace App\Http\Controllers;

use App\Models\ReservationsModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function Detail($id, Request $request){
        $info = $request->user()->showReservations()->with('showRoom')->latest()->find($id)->toArray();
        $rooms = [];
        foreach($info['show_room'] as $key => &$i):
            $rooms[$key] = $i;
        endforeach;
        $data = [
            'title' => 'Reservasi - '.$rooms['type'],
            'room' => $rooms,
            'reservasi' => $info,
            'guest' => User::find($info['user_id']),
            'end' => Carbon::parse($info['created_at'])->addDays($info['durasi'])->format('d M Y')
        ];
        return view('pages.reservations.reservationinfo', $data);
    }
}
