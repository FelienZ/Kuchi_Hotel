<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function info(){
        $data = [
            'title' => 'Booking Pages'
        ];
        return view('pages.booking', $data);
    }
}
