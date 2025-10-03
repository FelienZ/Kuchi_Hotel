<?php

namespace Database\Seeders;

use App\Models\ServicesModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ServicesModel::insert([
            [
            'id' => Str::uuid(),
            'service' => 'Restaurant',
            'image' => 'images/bar.jpg',
            'title' => 'International Restaurant',
            'open' => '06:00:00',
            'closed' => '22:00:00',
            'status' => 'closed',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
        [
            'id' => Str::uuid(),
            'service' => 'Healthcare',
            'image' => 'images/sauna.jpg',
            'title' => 'Relaxing Sauna',
            'open' => '08:00:00',
            'closed' => '16:00:00',
            'status' => 'closed',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => Str::uuid(),
            'service' => 'Healthcare',
            'image' => 'images/sauna.jpg',
            'title' => 'Relaxing Sauna',
            'open' => '08:00:00',
            'closed' => '16:00:00',
            'status' => 'closed',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => Str::uuid(),
            'service' => 'Gymnasium',
            'image' => 'images/gym.jpg',
            'title' => 'Fitness Center',
            'open' => '07:00:00',
            'closed' => '21:00:00',
            'status' => 'closed',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => Str::uuid(),
            'service' => 'Lounge',
            'image' => 'images/lounge.jpg',
            'title' => 'Lounge Space',
            'open' => '00:00:00',
            'closed' => '23:59:00',
            'status' => 'open',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => Str::uuid(),
            'service' => 'Ballroom',
            'image' => 'images/ballroom.jpg',
            'title' => 'Ballroom Space',
            'open' => '08:00:00',
            'closed' => '20:00:00',
            'status' => 'closed',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => Str::uuid(),
            'service' => 'Garden',
            'image' => 'images/garden.jpg',
            'title' => 'Garden Side',
            'open' => '00:00:00',
            'closed' => '23:59:00',
            'status' => 'open',
            'descriptions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, optio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],]
    );
    }
}
