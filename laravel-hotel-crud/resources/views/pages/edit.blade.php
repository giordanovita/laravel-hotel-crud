@extends('layout.main-layout')

@section('component')

    <h2>Modifica le informazioni relative alll'impiegato</h2>

    <form class="form" method="POST" action="{{route('update', $employee -> id)}}">

        @csrf
        @method('POST')

            <label for="firstname">Nome:</label>
            <input type="text" name="firstname" value="{{$employee -> firstname}}">

            <label for="lastname">Cognome:</label>
            <input type="text" name="lastname" value="{{$employee -> lastname}}">

            <label for="role">Ruolo:</label>
            <input type="text" name="role" value="{{$employee -> role}}">

            <label for="ral">RAL:</label>
            <input type="number" name="ral" value="{{$employee -> ral}}" >
           

            <button type="submit">Modifica</button>



       </form>


       <div class="button-cont">
            <a class="redirect" href="{{route('home')}}">Torna alla Home</a>
       </div>



@endsection