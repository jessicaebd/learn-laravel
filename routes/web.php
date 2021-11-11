<?php

use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\RegisterController;

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

// Single Post
Route::get('/events/{event:slug}', [EventController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/divisions/{division:slug}', [DivisionController::class, 'show']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
