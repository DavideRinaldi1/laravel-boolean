<header>
    <div class="container nav">
        <div class="row">
            <div class="col-4 d-flex align-items-center">
                <img src="img/logo.png" alt="">
            </div>
            <div class="col-8 d-flex align-items-center justify-content-end">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item"> <a href="/">Home</a> </li>

                    @foreach(config('main.routes') as $route)
                    <li class="list-inline-item {{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}"> <a href="{{$route['pathId']}}">{{$route['text']}}</a></li>
                    @endforeach

                    <li class="list-inline-item"> <a href="/iscriviti"><button type="button" class="btn btn-outline-success">Cadidati ora</button></a> </li>
                </ul>
            </div>
        </div>
    </div>
</header>