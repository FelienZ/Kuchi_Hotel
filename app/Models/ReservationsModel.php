<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ReservationsModel extends Model
{
    //
    use HasUuids;
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id' ,'user_id', 'room_id', 'durasi', 'sewa'
    ];
}
