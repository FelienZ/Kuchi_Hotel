<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class RoomsModel extends Model
{
    //
    use HasUuids;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'type', 'price', 'status', 'detail', 'image'
    ];
    protected $casts = [
        'detail' => 'array'
    ];
}
