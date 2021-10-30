<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
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

Route::get('/about', [MemberController::class, 'index']);

Route::get('/events', [EventController::class, 'index']);


// Single Post (Event)
Route::get('events/{slug}', [EventController::class, 'show']);