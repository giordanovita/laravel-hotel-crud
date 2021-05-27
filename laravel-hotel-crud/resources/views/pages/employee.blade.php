@extends('layout.main-layout')

@section('component')

        <h2>Dettagli impiegato:</h2>
    
    <main class="details">
        <div>
            <h4>Numero identificativo: {{$employee -> id}}</h4>
            <h4>Nome: {{$employee -> firstname}}</h4>
            <h4>Cognome: {{$employee -> role}}</h4>
            <h4>Ral: {{$employee -> ral}}</h4>
            
            
            
        </div>

       

        <div class="button-cont">
            <a class="redirect" href="{{route('home')}}">Torna alla Home</a>
        </div>

    </main>


@endsection