<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    bootstrap--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
{{--    fontawesome--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
{{--livewire--}}
    <livewire:styles />

    <title>Movie</title>
</head>
    <body  style="background-color: #263238 ">
        <nav class="navbar" style="border-bottom: 2px solid #37474F">
            <div class="container d-flex justify-content-start px-4 mx-auto ">
                <a href="{{route('movie.index')}})}}">
                    <img src="/movieicon.svg" alt="logo" style="width: 25px; height: 25px">
                </a>
                <a href="{{route('movie.index')}}">
                    <div class="ml-2 " style="font-weight: bolder; color: white; font-size: 13px">
                        MovieApp
                    </div>
                </a>

                <div class=" d-flex justify-content-start ml-4" style="color: white">
                    <a href="{{route('movie.index')}}" class="text-white">
                        <div class="px-2">Movies</div>
                    </a>
                    <div class="px-2" >TvShows</div>
                    <div class="px-2">Actors</div>
                </div>

                <livewire:search-dropdown>

                <img  class="rounded-circle ml-3 mt-2" src="/avatar.jpg" alt="avatar" style="width: 30px; height: 30px">

            </div>

        </nav>
        @yield('content')
        <livewire:scripts />
    </body>
</html>
