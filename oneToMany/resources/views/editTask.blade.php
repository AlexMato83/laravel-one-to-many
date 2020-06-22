@extends('layouts.mainLayout')

@section('main')
  @csrf
  @method('POST')

  <form action="index.html" method="post">

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$task['name']}}"><br>

    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" value="{{$task['description']}}"><br>

    <label for="deadline">DEADLINE</label>
    <input type="text" name="deadline" value="{{$task['deadline']}}"><br>

    <input type="submit" name="submit" value="UPDATE">
  </form>

@endsection
