<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){
        $data = [
        'title' => 'Kuchi Hotel',
        'facilities' => [
            'Restaurant' => [
                'image' => 'images/bar.jpg',
                'title' => 'International Restaurant',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => '6.00 AM - 10.00 AM'
            ],
            'Healthcare' => [
                'image' => 'images/sauna.jpg',
                'title' => 'Relaxing Sauna',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => '8.00 AM - 4.00 PM'
            ],
            'Gymnasium' => [
                'image' => 'images/gym.jpg',
                'title' => 'Fitness Center',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => '7.00 AM - 9.00 PM'
            ]
        ]
    ];
    return view('pages.homepage', $data);
    }

    public function Booking(Request $request){
        $data = $request->all();
        dd($data);
    }
}
