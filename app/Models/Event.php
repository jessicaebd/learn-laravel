<?php

namespace App\Models;


class Event
{
    private static $event_list = [
        [
            "eventName" => "Paid Promote",
            "slug" => "paid-promote",
            "division" => "Dana",
            "leader" => "Jenita",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, soluta numquam illum quae unde perferendis voluptatem tempore quibusdam, libero beatae impedit delectus necessitatibus. Expedita modi, vero ad blanditiis nam quas earum dolor, cum odit quae iste, impedit optio quo! Nesciunt provident magni libero maiores voluptatem labore nemo reiciendis blanditiis ipsum."
        ],
        [
            "eventName" => "Jasa Isi Kuesioner",
            "slug" => "jasa-isi-kuesioner",
            "division" => "Dana",
            "leader" => "Verlyn",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, soluta numquam illum quae unde perferendis voluptatem tempore quibusdam, libero beatae impedit delectus necessitatibus. Expedita modi, vero ad blanditiis nam quas earum dolor, cum odit quae iste, impedit optio quo! Nesciunt provident magni libero maiores voluptatem labore nemo reiciendis blanditiis ipsum."
        ],
        [
            "eventName" => "Game Night",
            "slug" => "game-night",
            "division" => "Dana & Acara",
            "leader" => "Alex",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, soluta numquam illum quae unde perferendis voluptatem tempore quibusdam, libero beatae impedit delectus necessitatibus. Expedita modi, vero ad blanditiis nam quas earum dolor, cum odit quae iste, impedit optio quo! Nesciunt provident magni libero maiores voluptatem labore nemo reiciendis blanditiis ipsum."
        ],
    ];

    public static function all() 
    {
        return self::$event_list;
    }

    public static function find($slug) 
    {
        $events = self::$event_list;
        $temp = [];

        foreach ($events as $event) {
            if ($event["slug"] === $slug) {
                $temp = $event;
            }
        }

        return $temp;
    }
}
