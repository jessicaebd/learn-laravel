<?php

use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
})->name('home');

Route::get('/about', [MemberController::class, 'index'])->name('about');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('singleEvents');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('singleCategory');

Route::get('/divisions/{division:slug}', [DivisionController::class, 'show']);


// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');


// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);


// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
