<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view('index');
});


Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/masjid', function () {
    return view('masjid');
});

Route::get('/masjid', function () {
    return view('masjid');
});

Route::get('/index', function () {
    return view('index2');
});

Route::get('/pulau', function () {
    return view('pulau');
});

Route::get('/ampera', function () {
    return view('ampera');
});

Route::get('/benteng', function () {
    return view('benteng');
});

Route::get('/alquran', function () {
    return view('alquran');
});

Route::get('/punti', function () {
    return view('punti');
});

Route::get('/login', function () {
    return view('login');
});
