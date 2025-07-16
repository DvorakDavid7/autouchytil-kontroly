<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/zasady-ochrany-osobnich-udaju', 'privacy-policy')->name('privacy-policy');
Route::view('/reservation-confirmed', 'reservation-confirmed')->name('reservation.confirmed');
