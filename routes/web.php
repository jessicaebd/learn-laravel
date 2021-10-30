<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {

    $member_list = [
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

    return view('about', [
        "title" => "About",
        "members" => $member_list
    ]);
});

Route::get('/events', function () {

    $event_list = [
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

    return view('events', [
        "title" => "Events",
        "eventList" => $event_list
    ]);
});


// Single Post (Event)
Route::get('events/{slug}', function ($slug) {

    $event_list = [
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

    $temp = [];
    foreach ($event_list as $event) {
        if ($event["slug"] === $slug) {
            $temp = $event;
        }
    }

    return view('event',[
        "title" => "Single Event",
        "event" => $temp
    ]);
});