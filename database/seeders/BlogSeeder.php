<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $blogs = [
            [
                'title' => 'Newly Launched Residential Projects of Hyderabad',
                'description' => "Hyderabad, the thriving city known for its vibrant culture and booming IT industry, is witnessing a surge in residential projects that cater to the growing demand for luxurious and modern living spaces. Developers are going the extra mile to create extraordinary homes that offer a comfortable lifestyle along with state-of-the-art amenities. Let's take a closer look at some of the recently launched projects in Hyderabad.",
                'image' => '1695815174_newly-launched-residential-projects-of-hyderabad_0.jpeg'
            ],
            [
                'title' => 'Captivating Commercials of M3M',
                'description' => "When it comes to futuristic retail and commercial developments in Gurugram, M3M stands at the forefront, setting new standards for excellence. Let's explore the captivating commercials offered by M3M.",
                'image' => '1695450286_Captivating-Commercials-of-M3M_0.jpg'
            ],
            [
                'title' => 'An Insight Into Bhutani City Center 150',
                'description' => 'With its magnificent amenities and strategic location, Bhutani City Center 150 is the future of retail and lifestyle entertainment in Noida. The prime location of this commercial project offers a great catchment area, ensuring a steady influx of customers and a thriving business. Immerse yourself in a world of delightful fragrances, curated retail shops, and endless business opportunities.',
                'image' => '1695376305_An-Insight-Into-Bhutani-City-Center-150_0.jpeg'
            ],
            [
                'title' => 'Exploring Latest Commercial Projects in Hinjawadi',
                'description' => "Hinjawadi, located in the western part of Pune, has emerged as a bustling hub for IT and commercial developments in recent years. With the increase of IT companies and professionals, the demand for commercial spaces and amenities has skyrocketed. In response, several prominent developers have launched exciting commercial projects in the area. In this blog, we will delve into few noteworthy commercial projects that have recently graced Hinjawadi's skyline.",
                'image' => '1695106603_Exploring-Latest-Commercial-Projects-in-Hinjawadi_0.jpg'
            ]
        ];
        foreach($blogs as $blog){
            Blog::create([
                'title' => $blog['title'],
                'description' => $blog['description'],
                'image' => $blog['image']
            ]);
        }
    }
}
