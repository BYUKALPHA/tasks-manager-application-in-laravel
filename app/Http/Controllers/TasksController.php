<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
public function index(){

    return view('tasks.index')->with('tasks',Task::All());
}
public function show($taskid)
{

return view('tasks.show')->with('yego',Task::find($taskid));
}

public function create()
{
    return view('tasks.create');
}
public function store()
{
    $data = request()->all();

    $task = new Task();
    $task->name = $data['name'];
    $task->description = $data['description'];
    $task->completed = false;

    $task->save();
    return redirect ('/tasks');
}

}
