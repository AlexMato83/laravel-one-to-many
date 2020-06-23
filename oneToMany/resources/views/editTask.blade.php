@extends('layouts.mainLayout')

@section('main')


  <form action="{{route('update_task',$task['id'])}}" method="post">
    @csrf
    @method('POST')
    <label for="name">NOME</label>
    <input type="text" name="name" value="{{$task['name']}}"><br>

    <label for="description">DESCRIZIONE</label>
    <input type="text" name="description" value="{{$task['description']}}"><br>

    <label for="deadline">SCADENZA</label>
    <input type="text" name="deadline" value="{{$task['deadline']}}"><br>

    <label for="employee_id">DIPENDENTE</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee['id']}}"
          @if ($employee['id'] == $task -> employee_id)
            selected
          @endif
        >{{$employee['lastname']}}</option>  
      @endforeach

    </select>
    <input type="submit" name="submit" value="UPDATE">
  </form>

@endsection
