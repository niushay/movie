<div class="d-flex justify-content-start pl-8 " style="margin-left: 500px">
    <div class="row">
        <input wire:model.debounce.500ms="search" class="pl-3 mt-2 mr-2" type="text" placeholder="search..." style="color: white; background-color: #455A64; border-radius: 2rem; border: none ">
    </div>
    @if(strlen($search) >=2)
        <div class=" d-block " style="position: absolute;; right:220px; top: 55px; width: 176px;  ">
            @if($search_results->count() > 0)
                <ul class="list-group">
                    @foreach($search_results as $result)
                        <li class=" list-group-item border-bottom text-small p-1 text-white border-secondary" style="background-color: #455A64;">
                            <a class="text-white d-flex justify-content-center" href="{{route('movie.show',$result['id'])}}" >
                                <img class="mr-4 " style="width: 20px" src="{{'https://image.tmdb.org/t/p/w92'.$result['poster_path']}}" alt="">
                                <small >{{$result['title']}}</small>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul class="list-group">
                        <li class="list-group-item border-bottom text-small p-1 text-white border-secondary" style="background-color: #455A64;">
                            <small>There is no result for {{$search}}</small>
                        </li>
                </ul>
            @endif
        </div>
    @endif

</div>


