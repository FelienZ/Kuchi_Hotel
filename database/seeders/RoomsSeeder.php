<?php

namespace Database\Seeders;

use App\Models\RoomsModel;
use Illuminate\Database\Seeder;
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
            'id' => Str::uuid(),
            'image' => '/images/room4.jpg',
            'type' => 'King Rooms',
            'price' => 750000,
            'status' => 'available',
            'detail' =>[
                'size' => '32sqm',
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

        RoomsModel::create([
            'id' => Str::uuid(),
            'image' => '/images/room2.jpg',
            'type' => 'Ultra Lux Rooms',
            'price' => 600000,
            'status' => 'available',
            'detail' =>[
                'size' => '28sqm',
                'beds' =>[
                    'king' => false,
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

        RoomsModel::create([
            'id' => Str::uuid(),
            'image' => '/images/room3.jpg',
            'type' => 'Deluxe Rooms',
            'price' => 500000,
            'status' => 'available',
            'detail' =>[
                'size' => '26sqm',
                'beds' =>[
                    'king' => false,
                    'twin' => true,
                    'extra' => false
                ],
                'shower' => true,
                'bathtub' => false,
                'refrigerator' => true,
                'safe' => true,
                'heater' => true,
                'wifi' => true,
                'desk' => true,
                'dryer' => true
            ],
        ]);

        RoomsModel::create([
            'id' => Str::uuid(),
            'image' => '/images/room1.jpg',
            'type' => 'Express Rooms',
            'price' => 450000,
            'status' => 'available',
            'detail' =>[
                'size' => '24sqm',
                'beds' =>[
                    'king' => false,
                    'twin' => true,
                    'extra' => false
                ],
                'shower' => true,
                'bathtub' => false,
                'refrigerator' => true,
                'safe' => false,
                'heater' => true,
                'wifi' => true,
                'desk' => false,
                'dryer' => true
            ],
        ]);
    }
}
