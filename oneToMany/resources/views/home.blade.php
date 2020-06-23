@extends('layouts.mainLayout')

@section('main')

   <a href="{{route('create_task')}}">Crea nuova ATTIVITA'</a>
  <ul>
    @foreach ($tasks as $task)
      <li>
        Attività:{{$task['name']}}</a><br>

        Dipendente: {{$task -> employee -> firstname}}
                    {{$task -> employee -> lastname}}<br>
        <a href="{{route('show_task',$task['id'])}}">MOSTRA DETTAGLI</a><br>
        <a href="{{route('delete_task',$task['id'])}}">CANCELLA ATTIVITA'</a>
      </li><br>
    @endforeach
  </ul>

@endsection
