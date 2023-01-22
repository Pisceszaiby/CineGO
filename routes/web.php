<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movies;
use App\Models\Showtimes;
use App\Models\Seats;
use App\Http\Controllers\AjaxController;

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
    $movie = Movies::get();
    $showtime = Showtimes::get();
    $data = compact('movie', 'showtime');
    return view('home')->with($data);
});
Route::get('/movie/{id}', function ($id) {
    $showtimes = Showtimes::where('movieID', $id)->get();
    $data = compact('showtimes');
    return view('showtimes')->with($data);
});
Route::get('/booking/{id}', function ($id) {
    $seats = Seats::where('showtimeID', $id)->get();
    $data = compact('seats');
    return view('booking')->with($data);
});
Route::get('ajax', function () {
    return view('message');
});
Route::post('/getmsg', [AjaxController::class, 'index']);
