<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $locations = ['AHMEDABAD','Bengaluru','Hyderabad','Kolkata','Mumbai'];

        Location::whereIn('city_name',$locations)->update(['is_top'=>1]);
    }
}
