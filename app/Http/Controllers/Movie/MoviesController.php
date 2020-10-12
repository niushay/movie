<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index(){
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];


        $movie_genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genres = collect($movie_genres)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });

        $now_playing_movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        return view('movies/indeex',compact(['popularMovies','genres','now_playing_movies']));

    }

    public function show($id){
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get(url('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images'))
            ->json();

        return view('movies/show',compact('movie'));
    }
}
