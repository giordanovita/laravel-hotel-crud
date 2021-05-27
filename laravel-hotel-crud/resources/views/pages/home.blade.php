@extends('layout.main-layout')

@section('component')
   <main>
       <h1>Elenco di tutti gli impiegati:</h1>

      

        <ul>
            @foreach ($employees as $employee)

                <li>
                    <a class="employees-list" href="{{route('employee', $employee -> id)}}">
                        <span>
                            {{$employee -> firstname}}
                            {{$employee -> lastname}}
                        </span>

                        <a href="{{route('edit', $employee -> id)}}">
                            <i class="far fa-edit"></i>
                        </a>

                        <a href="{{route('delete', $employee -> id)}}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </a>
                </li>
                
            @endforeach
        </ul>

    </main> 
@endsection