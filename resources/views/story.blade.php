@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{url('image/home-main.webp')}}" class="header-image" alt="Pratilipi landing">
    </div>
    <hr>
    <div class="container ">
        <div class="row">
            <div class="col-md-9">
                <h2 class="mb-0 display-4">{{$story->header}}</h2>
                <p class="blockquote-footer">{{$story->description}}</p>
                <div class="blog_details">
                    {!! $story->content !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Story Details
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fa fa-eye" style="color: #1d68a7"></i>
                            <b>Total Views : </b> {{$story->views}}
                        </p>
                        <input type="hidden" id="storyId" value="{{$story->id}}">
                        <p class="card-text">
                            <i class="fa fa-eye-slash" style="color: #1d68a7"></i>
                            <b>Current Views : </b> <span id="currentViews">{{$story->currentViews}}</span>
                        </p>
                        <p class="card-text">
                            <i class="fa fa-podcast" style="color: #1d68a7"></i>
                            <b>Posted On : </b> <span>{{ date('M j, Y H:iA', strtotime($story->created_at) )}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ mix('js/api.js') }}" defer></script>
@endsection
