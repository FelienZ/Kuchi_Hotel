<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function Services(){
        $data = [
            'title' => 'Services Page'
        ];
        return view('pages.servicespage', $data);
    }
}
