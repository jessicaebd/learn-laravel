<?php

use App\Models\Event;
use App\Models\Member;
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
    return view('about', [
        "title" => "About",
        "members" => Member::all()
    ]);
});

Route::get('/events', function () {
    return view('events', [
        "title" => "Events",
        "eventList" => Event::all()
    ]);
});


// Single Post (Event)
Route::get('events/{slug}', function ($slug) {
    return view('event',[
        "title" => "Single Event",
        "event" => Event::find($slug)
    ]);
});