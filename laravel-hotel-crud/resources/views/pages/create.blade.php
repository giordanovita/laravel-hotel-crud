@extends('layout.main-layout')

@section('component')

    <h2>Riempi i campi vuoti per aggiungere un nuovo impiegato</h2>

    <form class="form" method="POST" action="{{route('store')}}">

        @csrf
        @method('POST')

            <label for="firstname">Nome:</label>
            <input type="text" name="firstname">

            <label for="lastname">Cognome:</label>
            <input type="text" name="lastname">

            <label for="role">Ruolo:</label>
            <input type="text" name="role">

            <label for="ral">RAL:</label>
            <input type="number" name="ral" >
           

            <button type="submit">Aggiungi</button>



       </form>



     <div class="button-cont">
        <a class="redirect" href="{{route('home')}}">Torna alla Home</a>
     </div>

@endsection