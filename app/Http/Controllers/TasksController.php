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
    $this -> validate(request(), [
        'name'=>'required|min:4|max:15',
        'description' => 'required'

    ]);
    $data = request()->all();

    $task = new Task();
    $task->name = $data['name'];
    $task->description = $data['description'];
    $task->completed = false;

    $task->save();
    return redirect ('/tasks');
}

public function edit($taskid)
{

    $task = Task::find($taskid);
return view('tasks.edit')->with('task', $task);

}

public function update($taskid)
{
    $this -> validate(request(), [
        'name'=>'required|min:4|max:15',
        'description' => 'required'
    ]);
    $data = request()->all();

    $task = Task::find($taskid);
    $task->name = $data['name'];
    $task->description = $data['description'];
    $task->completed = false;

    $task->save();
    return redirect ('/tasks');


}
public function destroy($taskid)
{
    $task = Task::find($taskid);
    $task->delete();

return redirect('/tasks');
}

}
