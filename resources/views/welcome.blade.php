@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="./image/home-main.webp" class="header-image" alt="Pratilipi landing">
    </div>
    <hr>
    <div class="container">
        <div class="card-columns">
            @foreach($posts as $post)
                <a href="{{url('/story/'.$post->id)}}" style="cursor: pointer">
                    <div class="card">
                        <img class="card-img-top card-modify-image" src="./image/cover.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->header}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>
        <div class="center-align">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
