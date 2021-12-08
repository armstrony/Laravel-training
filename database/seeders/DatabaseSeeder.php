<?php

namespace Database\Seeders;

use App\Models\Art;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Art::create([
            "title" => "Nanami Aoyama",
            "image" => "art.png"
        ]);
        Art::create([
            "title" => "Gokou Ruri",
            "image" => "art2.png"
        ]);
        Art::create([
            "title" => "Metropolis Girl",
            "image" => "art3.png"
        ]);
        Art::create([
            "title" => "Asada Shinon",
            "image" => "art4.png"
        ]);
        Art::create([
            "title" => "Fallen Haruna",
            "image" => "art5.png"
        ]);
        Art::create([
            "title" => "Lakeside Girl",
            "image" => "art6.png"
        ]);
        Art::create([
            "title" => "USS Hamman",
            "image" => "art7.png"
        ]);
        Art::create([
            "title" => "Summer Girl",
            "image" => "art8.png"
        ]);
        Art::create([
            "title" => "Natsumatsuri",
            "image" => "art9.jpg"
        ]);
    }
}
