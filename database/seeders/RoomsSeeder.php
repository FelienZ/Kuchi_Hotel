<?php

namespace Database\Seeders;

use App\Models\RoomsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RoomsModel::create([
            'id' => Str::uuid() ,
            'type' => 'King Rooms',
            'price' => 600000,
            'status' => 'available',
            'detail' =>[
                'size' => '28sqm',
                'beds' =>[
                    'king' => true,
                    'twin' => true,
                    'extra' => true
                ],
                'shower' => true,
                'bathtub' => true,
                'refrigerator' => true,
                'safe' => true,
                'heater' => true,
                'wifi' => true,
                'desk' => true,
                'dryer' => true
            ],
        ]);
    }
}
