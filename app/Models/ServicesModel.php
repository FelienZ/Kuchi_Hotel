<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    //
    use HasUuids;

    protected $table = 'services';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'service', 'image', 'title', 'status', 'open', 'closed', 'descriptions'
    ];
}
