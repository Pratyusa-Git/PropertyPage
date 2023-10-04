<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Builder;

class BuilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $builders = [
            [
                'name' => 'ATS Group',
                'is_top' => 1,
                'logo' => '1614059403_ATS-Group_0.png'
            ],
            [
                'name' => 'Supertect',
                'is_top' => 0,
                'logo' => '1614059248_Supertech_0.png'
            ],
            [
                'name' => 'Godrej Properties',
                'is_top' => 1,
                'logo' => '1614058928_Godrej-Properties_0.jpg'
            ],
            [
                'name' => 'ACE Group',
                'is_top' => 0,
                'logo' => '1614057994_ACE-Group_0.png'
            ],
            [
                'name' => 'Birla Estate',
                'is_top' => 1,
                'logo' => '1614058994_Birla-Estate_0.png'
            ],
            [
                'name' => 'Kalpatru Group',
                'is_top' => 0,
                'logo' => '1613981798_Kalpatru-Group_0.jpg'
            ],
            [
                'name' => 'SS Group',
                'is_top' => 1,
                'logo' => '1613981344_SS-GROUP_0.jpg'
            ],
            [
                'name' => 'Gulshan Homz',
                'is_top' => 0,
                'logo' => '1613980667_Gulshan-Homz_0.png'
            ],
            [
                'name' => 'Griha Pravesh',
                'is_top' => 0,
                'logo' => '1613978863_Griha-Pravesh_0.jpg'
            ],
            [
                'name' => 'Raunak Group',
                'is_top' => 0,
                'logo' => '1613976794_Raunak-Group_0.png1'
            ],
            [
                'name' => 'Shapoorji Pallonji',
                'is_top' => 0,
                'logo' => '1613977044_Shapoorji-Pallonji_0.jpg'
            ],
            [
                'name' => 'Max Estates',
                'is_top' => 0,
                'logo' => '1613977214_Max-Estates_0.jpg'
            ],
            [
                'name' => 'BCC Group',
                'is_top' => 0,
                'logo' => '1613979137_BCC-Group_0.jpg'
            ],
            [
                'name' => 'Samridhi Group',
                'is_top' => 1,
                'logo' => '1613979557_Samridhi-Group_0.png'
            ],
            [
                'name' => 'Tata Housing',
                'is_top' => 0,
                'logo' => '1613980335_Tata-Housing_0.png'  
            ],
            [
                'name' => 'Gaur Yamuna City',
                'is_top' => 1,
                'logo' => '1613979911_Gaur-Yamuna-City_0.jpg'
            ],
        ];
        foreach($builders as $builder){
            Builder::create([
                'name' => $builder['name'],
                'is_top' => $builder['is_top'],
                'logo' => $builder['logo']
            ]);
        }
    }
}
