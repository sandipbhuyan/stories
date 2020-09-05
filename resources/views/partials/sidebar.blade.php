<div class="col-md-3 col-lg-3" id="sidebar-collapse">
    <div class="list-group sidebar" style="font-size: 18px;">

        <a href="{{route('stories.index')}}" class="list-group-item
              {{Route::is('stories.index') ||
                Route::is('stories.show')||
                Route::is('stories.edit') ||
                Route::is('stories.create')? "active": ""}}">
            <i class="fa fa-book"></i> Stories
        </a>

    </div>
</div>
