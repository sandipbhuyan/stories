<div class="col-md-3 col-lg-3" id="sidebar-collapse">
    <div class="list-group sidebar" style="font-size: 18px;">
        <a href="{{route('home')}}" class="list-group-item
              {{Route::is('home') ? "active": ""}}
                ">
            <i class="fa fa-home"></i> Dashboard
        </a>
{{--        <a href="{{route('experience.index')}}" class="list-group-item--}}
{{--              {{Route::is('experience.index') ||--}}
{{--                Route::is('experience.show')||--}}
{{--                Route::is('experience.edit') ||--}}
{{--                Route::is('experience.create')? "active": ""}}">--}}
{{--            <i class="fa fa-bank"></i> Experience--}}
{{--        </a>--}}

    </div>

    <ul class="list-group">
        <li class="list-group-item active alert-danger">DETAILS</li>
        <li class="list-group-item">Last Login : </li>
    </ul>
    <ul class="list-group">
        <li class="list-group-item active">PROFILE INFORMATION</li>
        <li class="list-group-item">Created At :</li>
        <li class="list-group-item">Updated At : </li>
    </ul>
</div>
