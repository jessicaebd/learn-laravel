<?php

namespace App\Models;

class Member
{
    private static $member_list = [
        [
            "name" => "Geviena",
            "role" => "Ketua",
            "class" => "PPA 53"
        ],
        [
            "name" => "Pascal Wilman",
            "role" => "Wakil Ketua",
            "class" => "PPTI 10"
        ],
        [
            "name" => "Serafim",
            "role" => "Bendahara II",
            "class" => "PPBP 1"
        ],
    ];

    public static function all() 
    {
        return self::$member_list;
    }
}
