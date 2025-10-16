<?php

namespace App\Http\Controllers;

use App\Helpers\ServiceStatus;
use App\Models\ServicesModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function Services(){
        ServiceStatus::StatusChecker();
        $data = [
            'title' => 'Services Page',
            'facilities' => ServicesModel::all()->toArray()
        ];
        return view('pages.services.servicespage', $data);
    }

    public function ServicesDetail($id){
        $item = ServicesModel::find($id)->toArray();
        $data = [
            'title' => 'Services - '.$item['title'],
            'facility' => $item
        ];
        return view('pages.services.servicesdetailpage', $data);
    }
}
