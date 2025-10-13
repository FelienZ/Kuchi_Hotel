<?php

namespace App\Helpers;

use App\Models\ReservationsModel;
use App\Models\RoomsModel;

class ReservationStatus{
    public static function statusUpdater(){
        $date_now = now();
        $expiredQueue = ReservationsModel::where('checkout_limit', '<=', $date_now)->where('status', '!=', 'expired')->get();
        foreach($expiredQueue as $ex):
            $ex->status = 'expired';
            $ex->save();
            #cek kalau statusny jadi expired, kembalikan stok 1
            $rooms = RoomsModel::find($ex['room_id']);
            if($rooms){
                $rooms->stock += 1;
                $rooms->save();
            }
        endforeach;
    }
}