@extends('layouts.bool')

@section('content')
    @section('title', 'Users')
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
            <div class="col">
                <img src="{{$user->image}}" alt="" srcset="">
                <h4>{{$user->first_name}} {{$user->last_name}}</h4>
                <p>Email: {{$user->email}}</p>
                <p>Gender: {{$user->gender}}</p>
                <a href="/db/{{$user->id}}">Vedi dettagli utente</a>
            </div>    
            @endforeach
        </div>
    </div>

@endsection