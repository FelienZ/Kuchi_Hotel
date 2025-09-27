<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function Services(){
        $data = [
            'title' => 'Services Page',
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
            ],
            'Lounge' => [
                'image' => 'images/lounge.jpg',
                'title' => 'Lounge Space',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => 'All Time'
            ],
            'Ballroom' => [
                'image' => 'images/ballroom.jpg',
                'title' => 'Ballroom',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => '8.00 AM - 8.00 PM'
            ],
            'Garden' => [
                'image' => 'images/garden.jpg',
                'title' => 'Garden Side',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
                'operational' => 'All Time'
            ],
        ]
        ];
        return view('pages.servicespage', $data);
    }
}
