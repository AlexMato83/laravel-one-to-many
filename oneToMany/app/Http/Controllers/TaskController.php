<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

      $tasks = Task::all();
      return view('home', compact('tasks'));
    }

    public function edit($id){

      $task = Task::findOrFail($id);
      $employees = Employee::all();
      return view('editTask', compact('task','employees'));
    }

    public function show($id){

      $task = Task::findOrFail($id);
      return view('showTask', compact('task'));
    }

    public function update(Request $request, $id){
       // print_r($request->all());die();
      $validateData = $request ->validate([
         'name'=> 'required',
         'description' => 'required',
         'deadline' => 'required',
         'employee_id' => 'required'
      ]);

      Task::whereId($id) -> update($validateData);
      return redirect() -> route('home');
    }
    public function create(){
      $employees = Employee::all();
      return view('createTask', compact('employees'));
    }

    public function store(Request $request){
      $validateData = $request ->validate([
         'name'=> 'required',
         'description' => 'required',
         'deadline' => 'required',
         'employee_id' => 'required'
      ]);

      $task = new Task;
      $task['name'] = $validateData['name'];
      $task['description'] = $validateData['description'];
      $task['deadline'] = $validateData['deadline'];
      $task['employee_id'] = $validateData['employee_id'];

      $task -> save();

      return redirect() -> route('home');
    }

    public function delete($id){

      $task = Task::findOrFail($id);
      $task -> delete();

      return redirect()-> route('home');


    }
}
