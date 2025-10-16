<?php

namespace App\Helpers;

use App\Models\ServicesModel;
use Carbon\Carbon;

class ServiceStatus{
    public static function StatusChecker(){
        $time_now = Carbon::now()->format('H:i:s');
        ServicesModel::where('open', '<=', $time_now)->update(['status' => 'open']);
        ServicesModel::where('closed', '<=', $time_now)->update(['status' => 'closed']);
    }
}