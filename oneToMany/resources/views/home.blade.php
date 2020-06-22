@extends('layouts.mainLayout')

@section('main')


  <ul>
    @foreach ($tasks as $task)
      <li>
        <a href="{{route('edit_task',$task['id'])}}">Attività: {{$task['name']}}</a><br>
        
        Dipendente: {{$task -> employee -> firstname}}
                    {{$task -> employee -> lastname}}<br><br>
      </li>
    @endforeach
  </ul>

@endsection
