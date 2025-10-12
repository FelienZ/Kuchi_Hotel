<?php

namespace App\Helpers;
use App\Models\RoomsModel;

class RoomStock{
    //harus static kalo dipakai diluar tanpa new instance
    public static function stockChecker(){
        RoomsModel::where('stock', 0)->update(['status' => 'none']);
        RoomsModel::where('stock', '>', 0)->update(['status' => 'available']);
    }
}