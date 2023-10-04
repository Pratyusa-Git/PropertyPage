<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $projects = [
            [
                'name' => 'Godrej Nirvaan',
                'area_id' => 1,
                'is_features' => 0,
                'is_recent' => 1,
                'is_popular' => 1,
                'city_id' => 1,
                'resident_type_id' => 1,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 75.45,
                'image' => '309cd0c06dc-069a-41ef-9f92-2b0a71919ff9Clover_Floors4.jpg'
            ],
            [
                'name' => 'SS Almeria',
                'area_id' => 3,
                'is_features' => 1,
                'is_recent' => 1,
                'is_popular' => 0,
                'city_id' => 9,
                'resident_type_id' => 2,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 74.42,
                'image' => '345ats-pristine-golf-villas-project-project-large-image1.jpg'
            ],
            [
                'name' => 'VTP Blue Waters',
                'area_id' => 2,
                'is_features' => 1,
                'is_recent' => 1,
                'is_popular' => 1,
                'city_id' => 2,
                'resident_type_id' => 2,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 66.40,
                'image' => '417m3m-woodshire-apartment-interiors210.jpg'
            ],
            [
                'name' => 'Godrej Nest',
                'area_id' => 4,
                'is_features' => 1,
                'is_recent' => 1,
                'is_popular' => 0,
                'city_id' => 9,
                'resident_type_id' => 3,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 55.60,
                'image' => '619central-park-flower-valley-aqua-front-towers-tower-view59.jpg'
            ],
            [
                'name' => 'M3M Sierra',
                'area_id' => 3,
                'is_features' => 1,
                'is_recent' => 0,
                'is_popular' => 1,
                'city_id' => 9,
                'resident_type_id' => 4,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 78.50,
                'image' => '781m3m-sky-lofts-project-large-image18.jpg'
            ],
            [
                'name' => 'Godrej Greens',
                'area_id' => 4,
                'is_features' => 1,
                'is_recent' => 1,
                'is_popular' => 0,
                'city_id' => 9,
                'resident_type_id' => 3,
                'no_of_bathroom' => 1,
                'is_parking' => 1,
                'min_price' => 69.20,
                'image' => '829m3m-skywalk-gurgaon4.jpeg'
            ]
        ];
        foreach($projects as $project){
            Project::create([
                'name' => $project['name'],
                'area_id' => $project['area_id'],
                'is_featured' => $project['is_features'],
                'is_recent' => $project['is_recent'],
                'is_popular' => $project['is_popular'],
                'city_id' => $project['city_id'],
                'resident_type_id' => $project['resident_type_id'],
                'no_of_bathroom' => $project['no_of_bathroom'],
                'is_parking' => $project['is_parking'],
                'min_price' => $project['min_price'],
                'image' => $project['image']
            ]);
        }
    }
}
