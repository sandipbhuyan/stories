@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{url('image/home-main.webp')}}" class="header-image" alt="Pratilipi landing">
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-9">

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Story Details
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <i class="fa fa-eye"></i>
                        <b>Total Views</b> {{$story->views}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
