<header>
    <div class="fluid-container next_course">
        <div class="row">
            <div class="col text-center">
                <span>PROSSIMO CORSO: </span> 
                <span>10 MARZO</span>
            </div>
        </div>
    </div>
    <div class="container nav">
        <div class="row">
            <div class="col-4 d-flex align-items-center">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <div class="col-8 d-flex align-items-center justify-content-end">
                <ul class="list-inline list-unstyled">
                    @foreach(config('main.routes') as $route)
                    <li class="list-inline-item {{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}"> <a href="{{$route['pathId']}}">{{$route['text']}}</a></li>
                    @endforeach
                    <li class="list-inline-item"> 
                        <a href="/iscriviti">
                            <button type="button" class="btn btn-outline-success">
                                Candidati ora
                            </button>
                        </a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>