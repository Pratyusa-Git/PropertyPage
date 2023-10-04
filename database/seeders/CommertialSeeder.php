<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommercialSpace;

class CommertialSeeder extends Seeder
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
                'name' => 'M3M Commercial',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1170,
                'price' => 75.45,
                'image' => '46ABC-Assotech.jpg'
            ],
            [
                'name' => 'Griha Pravesh Artham',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1500,
                'price' => 75.45,
                'image' => '158grihapravesh-artham-project-project-large-image1.jpg'
            ],
            [
                'name' => 'M3M Broadway',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 750,
                'price' => 75.45,
                'image' => '491m3m-broadway-project-large-image6.jpg'
            ],
            [
                'name' => 'London Mart',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 11170,
                'price' => 75.45,
                'image' => '166supertech-supernova-spira-residency-project-project-large-image17.jpg'
            ],
            [
                'name' => 'Assotech Business Cresterra',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1822,
                'price' => 75.45,
                'image' => '251bhutani-alphathum-etherea-noida6.jpg'
            ],
            [
                'name' => 'Alphathum Etherea',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1899,
                'price' => 75.45,
                'image' => '265bhutani-cyberthum-entrance-view85.jpg'
            ],
            [
                'name' => 'Alphathum Ultima Pods',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1778,
                'price' => 75.45,
                'image' => '339bhutani-grandthum-project-project-large-image11 (1).jpg'
            ],
            [
                'name' => 'Supertech Doon Square',
                'area_id' => 1,
                'city_id' => 1,
                'commercial_type_id' => 1,
                'size' => 1889,
                'price' => 75.45,
                'image' => '468london-mart.jpg'
            ]
        ];
        foreach($projects as $project){
            CommercialSpace::create([
                'name' => $project['name'],
                'area_id' => $project['area_id'],
                'city_id' => $project['city_id'],
                'commercial_type_id' => $project['commercial_type_id'],
                'size' => $project['size'],
                'price' => $project['price'],
                'image' => $project['image']
            ]);
        }
    }
}
