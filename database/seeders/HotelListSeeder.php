<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HotelListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Park Plaza',
                'address' => 'Westminster United Kingdom',
                'supplier' => 'SunHotels',
                'star' => '4',
                'status' => 1,
            ],
            [
                'name' => 'Britannia International',
                'address' => ' 163 Marsh Wall,United Kingdom',
                'supplier' => 'Own',
                'star' => '2',
                'status' => 1,
            ],
            [
                'name' => 'Central Park Hotel',
                'address' => '49 Queensborough,United Kingdom',
                'supplier' => 'HotelBeds',
                'star' => '5',
                'status' => 1,
            ],
            [
                'name' => 'DoubleTree',
                'address' => '7 Pepys,United Kingdom',
                'supplier' => 'SunHotels',
                'star' => '1',
                'status' => 1,
            ],
            [
                'name' => 'Leonardo Royal',
                'address' => '7 Pepys,United Kingdom',
                'supplier' => 'SunHotels',
                'star' => '2',
                'status' => 0,
            ],
            [
                'name' => 'The Tower',
                'address' => 'St Katherines,United Kingdom',
                'supplier' => 'Own',
                'star' => '5',
                'status' => 1,
            ]
        ]);    
    }
}
