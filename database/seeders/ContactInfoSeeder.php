<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contactInfo = [
            'address' => 'Add India Center Plot No. 9 Second Floor Sec. 125 Noida – 201301',
            'email' => 'info@Bullmenrealty.com',
            'phone' => '(+91)7400101010'
        ];
        ContactUs::create($contactInfo);
    }
}
