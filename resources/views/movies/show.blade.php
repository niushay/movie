@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <img class="mt-5" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" style="width: 65%; height:90%" alt="">
            </div>
            <div class="col-md-6 text-white mt-5 ">
                <h2 class="font-weight-bold">
                    {{$movie['title']}}
                </h2>
                <small><img src="/star.svg" style="height: 15px;width: 15px">
                    {{$movie['vote_average']*10}}%
                    |
                    {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                    |
                    @foreach($movie['genres'] as $genre)
                       {{$genre['name']}} @if(!$loop->last),@endif
                    @endforeach
                </small>
                <p class="mt-4 mb-5">
                    {{$movie['overview']}}
                </p>

                <h6 class="font-weight-bold"  >
                    Featured Crew
                </h6>
                <div class="row">
                    @foreach($movie['credits']['crew'] as $crew)
                        @if($loop->index<2)
                        <div class="col-md-5 mr-2">
                            <small>
                                {{$crew['name']}}
                            </small>
                            <small>
                                {{$crew['job']}}
                            </small>
                        </div>
                        @endif
                    @endforeach
                </div>
                @if(count($movie['videos']['results']) > 0)
                    <a class="btn mt-5" style="background-color: #FFAB40" href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}">
                        <i class="far fa-play-circle"></i>
                        Play trailer
                    </a>
                @endif
            </div>
        </div>
{{--        casts--}}
        <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top: 50px">
        <h2 class="font-weight-bold mt-5 text-white mb-5">
            Cast
        </h2>
        <div class="row">
            @foreach($movie['credits']['cast'] as $cast)
                @if($loop->index<5)
                    <div class="col text-white">
                        <img src="{{'https://image.tmdb.org/t/p/w500'.$cast['profile_path']}}" alt="profile_path" style="width: 11rem">
                        <div>
                            {{$cast['name']}}
                        </div>
                        <div>
                            {{$cast['character']}}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
{{--images--}}
        <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top: 50px">
        <h2 class="font-weight-bold mt-5 text-white">
            Images
        </h2>
        <div class="row">
            @foreach($movie['images']['backdrops'] as $image)
                @if($loop->index<9)
                    <div class="col-md-4 text-white  mt-5 mb-3">
                        <img src="{{'https://image.tmdb.org/t/p/w500'.$image['file_path']}}" alt="file_path" style="width: 100%">
                    </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
