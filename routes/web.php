<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {

    $data = [
        'web_title'=>'My Film',
        'films'=>[
            'The evil dead',
            'Ash vs the evil dead',
            'L\'esorcista'
        ],
        'registi'=>[],
        'genre'=>'Horror'
    ];

    return view('index', $data);
})->name('home');

Route::get('/your_film', function () {

    $your_data = [
        'web_title'=>'Your Film',
        'films'=>[
            'Taxi driver',
            'Parasite',
            'L\'esorciccio'
        ],
        'registi'=>[],
        'genre'=>'Drama'
    ];

    return view('your_film', $your_data);
})->name('your_film');