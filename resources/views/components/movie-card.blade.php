<div class="col">
    <div class="card bg-transparent text-white mt-4" style="width: 11rem; border: none">
        <a href="{{route('movie.show',$movie['id'])}}">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" class="card-img-top" alt="poster"
                style="height: 16rem; margin-bottom: 5px">
        </a>
        <div class="card-body p-0">
            <a href="{{route('movie.show',$movie['id'])}}">
                <small class="card-title" style="font-weight: bolder;">{{$movie['title']}}</small>
            </a>
            <div>
                <small class="card-text "><img src="star.svg" style="height: 15px;width: 15px">
                    {{$movie['vote_average']}}
                    |
                    {{\Carbon\Carbon::parse($movie['release_date'])->format('M d,Y') }}
                </small>
            </div>
            <div>
                @foreach($movie['genre_ids'] as $genre_id)
                    <small>{{$genres[$genre_id]}} @if(!$loop->last),@endif</small>
                @endforeach
            </div>

        </div>
    </div>
</div>
