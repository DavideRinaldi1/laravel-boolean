@extends('layouts.bool')

@section('content')

    @section('title', 'Dettaglio Utente')
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <img src="{{$singleUser->image}}" alt="" srcset="">
                <h4>{{$singleUser->first_name}} {{$singleUser->last_name}}</h4>
                <p>Email: {{$singleUser->email}}</p>
                <p>Gender: {{$singleUser->gender}}</p>
            </div>
        </div>
    </div>
@endsection