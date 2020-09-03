@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sidebar')
            <div class="content-box-large col-lg-9">
                <div class="panel-heading">
                    <h4 class="title">{{$indexvar['title']}}
                        <div >
                            <b>Total of {{$indexvar['title']}}:</b>
                            <span class="badge label-success"></span>
                            <br/><br/>
                            <b>URL:</b>
                            <a target="_blank" href="{{ url($indexvar['url']) }}">{{ url($indexvar['url']) }}</a>
                        </div>
                    </h4>
                    <hr>
                </div>
                <div class="panel-body" >

                </div>

            </div>
        </div>
    </div>
@endsection
