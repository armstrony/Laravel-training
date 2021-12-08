<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Art
{
    private static $art_info = [
        [
            "title" => "Nanami Aoyama",
            "image" => "art.png"
        ],
        [
            "title" => "Gokou Ruri",
            "image" => "art2.png"
        ],
        [
            "title" => "Metropolis Girl",
            "image" => "art3.png"
        ],
        [
            "title" => "Asada Shinon",
            "image" => "art4.png"
        ],
        [
            "title" => "Fallen Haruna",
            "image" => "art5.png"
        ],
        [
            "title" => "Lakeside Girl",
            "image" => "art6.png"
        ],
        [
            "title" => "USS Hamman",
            "image" => "art7.png"
        ],
        [
            "title" => "Summer Girl",
            "image" => "art8.png"
        ],
        [
            "title" => "Natsumatsuri",
            "image" => "art9.jpg"
        ],
    ];

    public static function all()
    {
        return collect(self::$art_info);
    }
}
