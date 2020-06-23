@extends('layouts.mainLayout')

@section('main')
  <form action="{{route('store')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">NOME</label>
    <input type="text" name="name" value=""><br>

    <label for="description">DESCRIZIONE</label>
    <input type="text" name="description" value=""><br>

    <label for="deadline">SCADENZA</label>
    <input type="text" name="deadline" value=""><br>

    <label for="employee_id">DIPENDENTE</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee['id']}}">{{$employee['lastname']}}</option>
      @endforeach

    </select>
    <input type="submit" name="submit" value="CREATE">
  </form>
@endsection
