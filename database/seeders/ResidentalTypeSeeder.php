<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ResidentalType;

class ResidentalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $residentals = [
            [
                'no_of_bedrooms' => '1'
            ],
            [
                'no_of_bedrooms' => '2'
            ],
            [
                'no_of_bedrooms' => '3'
            ],
            [
                'no_of_bedrooms' => '4'
            ]
        ];
        foreach($residentals as $residental){
            ResidentalType::create([
                'no_of_bedrooms' => $residental['no_of_bedrooms']
            ]);
        }
    }
}
