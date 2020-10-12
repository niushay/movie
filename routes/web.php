<?php

use Illuminate\Support\Facades\Route;

//movies
Route::get('/', 'Movie\MoviesController@index')->name('movie.index');
Route::get('/movie/{id}', 'Movie\MoviesController@show')->name('movie.show');

