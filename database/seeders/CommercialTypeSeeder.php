<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommercialType;

class CommercialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $commercialTypes = [
            [
                'name' => 'OFFICE SPACE'
            ],
            [
                'name' => 'RETAIL SHOP'
            ]
        ];
        foreach($commercialTypes as $commercialType){
            CommercialType::create([
                'name' => $commercialType['name']
            ]);
        }
    }
}
