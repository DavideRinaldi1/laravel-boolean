@extends('layouts.bool')
@section('content')
<div class="container">
    <div class="row">
        <div class="col d-flex flex-column align-items-start justify-content-center jumbo_left">
            <h1 class="title"> Cambia la tua vita. <br> Entra in Boolean.</h1>
            <h3>Segui il corso, diventi un web developer e trovi lavoro.</h3>
            <ul class="list-unstyled jumbo_list">
                <li>
                    <img src="https://www.boolean.careers/images/icons/arrow.png" alt="arrow">
                    6 mesi di corso full time, online e in diretta
                </li>
                <li>
                    <img src="https://www.boolean.careers/images/icons/arrow.png" alt="arrow">
                    Nessuna competenza di programmazione richiesta
                </li>
                <li>
                    <img src="https://www.boolean.careers/images/icons/arrow.png" alt="arrow">
                    Se non trovi lavoro ti rimborsiamo
                </li>
            </ul>
            <button type="button" class="btn btn-outline-success">Candidati ora</button>
        </div>
        <div class="col d-flex justify-content-center align-items-center jumbo_right">
            <img src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="" data-toggle="modal" data-target="#intro">
        </div>
    </div>
    
</div>
@endsection