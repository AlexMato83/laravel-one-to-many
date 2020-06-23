@extends('layouts.mainLayout')

@section('main')


  <ul>
    @foreach ($tasks as $task)
      <li>
        Attività:{{$task['name']}}</a><br>

        Dipendente: {{$task -> employee -> firstname}}
                    {{$task -> employee -> lastname}}<br><br>
        <a href="{{route('show_task',$task['id'])}}">MOSTRA DETTAGLI</a>
      </li>
    @endforeach
  </ul>

@endsection
