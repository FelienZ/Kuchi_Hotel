<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){
        $data = [
        'title' => 'Kuchi Hotel',
        'facilities' => ServicesModel::all()->toArray()
    ];
    return view('pages.homepage', $data);
    }

    public function Booking(Request $request){
        $data = $request->all();
        dd($data);
    }
}
