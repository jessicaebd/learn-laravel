<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Division;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;

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

Route::get('/categories', [CategoryController::class, 'index']);

// Single Post (Event)
Route::get('/events/{event:slug}', [EventController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/divisions/{division:slug}', [DivisionController::class, 'show']);
