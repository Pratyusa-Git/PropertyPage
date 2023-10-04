<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
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
                'name' => 'Sector 3',
                'location_id' => 1 //AHMEDABAD
            ],
            [
                'name' => 'Sector 68',
                'location_id' => 2 //Bengaluru
            ],
            [
                'name' => 'Mamurdi',
                'location_id' => 9
            ],
            [
                'name' => 'Mahalunge',
                'location_id' => 9
            ],
            [
                'name' => 'Sector 32',
                'location_id' => 2
            ],
            [
                'name' => 'Undri',
                'location_id' => 9 //Pune
            ],
            [
                'name' => 'Sector 33',
                'location_id' => 1
            ]
        ];
        foreach($locations as $location){
            Area::create([
                'name' => $location['name'],
                'location_id' => $location['location_id']
            ]);
        }
    }
}
