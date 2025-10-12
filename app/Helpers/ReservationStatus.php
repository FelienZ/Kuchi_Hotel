<?php

namespace App\Helpers;

use App\Models\ReservationsModel;

class ReservationStatus{
    public static function statusUpdater(){
        $date_now = now();
        ReservationsModel::where('checkout_limit', '<=', $date_now)->update(['status' => 'expired']);
    }
}