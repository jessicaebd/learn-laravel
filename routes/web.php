<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Models\Category;
use App\Models\Division;
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
Route::get('/events/{event:slug}', [EventController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'eventList' => $category->events,
        'category' => $category->name
    ]);
});

Route::get('/divisions/{division:slug}', function (Division $division) {
    return view('division', [
        'title' => $division->name,
        'memberList' => $division->members,
        'division' => $division->name,
        'jobdesk' => $division->jobdesk
    ]);
});