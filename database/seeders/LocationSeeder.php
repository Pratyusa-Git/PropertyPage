<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $locations = [
            [
                'city_name' => 'AHMEDABAD',
                'image' => 'AHMEDABAD.jpg'
            ],
            [
                'city_name' => 'Bengaluru',
                'image' => 'Bengaluru.jpg'
            ],
            [
                'city_name' => 'Dehradun',
                'image' => 'Dehradun.jpg'
            ],
            [
                'city_name' => 'Faridabad',
                'image' => 'Faridabad.jpg'
            ],
            [
                'city_name' => 'Hyderabad',
                'image' => 'Hyderabad.jpg'
            ],
            [
                'city_name' => 'Kolkata',
                'image' => 'Kolkata.jpg'
            ],
            [
                'city_name' => 'Mumbai',
                'image' => 'Mumbai.jpg'
            ],
            [
                'city_name' => 'Noida',
                'image' => 'Noida.jpg'
            ],
            [
                'city_name' => 'Pune',
                'image' => 'Pune.jpg'
            ],
            [
                'city_name' => 'Thane',
                'image' => 'Thane.jpg'
            ]
        ];
        foreach($locations as $location){
            Location::create([
                'city_name' => $location['city_name'],
                'image' => $location['image']
            ]);
        }
    }
}
