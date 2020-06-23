@extends('layouts.mainLayout')

@section('main')
  <ul>
   <li>Nome attività: {{$task['name']}}</li>
   <li>Descrizione: {{$task['description']}}</li>
   <li>Scadenza: {{$task['deadline']}}</li>
   <li><a href="{{route('edit_task',$task['id'])}}">MODIFICA ATTIVITA'</a></li>
  </ul>
@endsection
