@extends('layouts.main')
@section('content')
    <div class="container" style="margin-top:50px; font-weight:bold; color:#FFAB40; font-size : 20px">
        popular movies
    </div>
    <div class="container " style="margin-top:30px">
        <div class="row">
            @foreach($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>


{{--now playing movies--}}
    <div class="container" style="margin-top:50px; font-weight:bold; color:#FFAB40; font-size : 20px">
        Now Playing movies
    </div>
    <div class="container " style="margin-top:30px">
        <div class="row">
            @foreach($now_playing_movies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>

@endSection
