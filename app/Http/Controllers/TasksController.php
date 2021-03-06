<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
public function index(){

    return view('tasks.index')->with('tasks',Task::All());
}
public function show(Task $task)
{

return view('tasks.show')->with('yego',$task);
}

public function create()
{
    return view('tasks.create');
}
public function store()
{
    $this -> validate(request(), [
        'name'=>'required|min:4|max:25',
        'description' => 'required'

    ]);
    $data = request()->all();

    $task = new Task();
    $task->name = $data['name'];
    $task->description = $data['description'];
    $task->completed = false;

    $task->save();
    session()->flash('success','Task created successfully');
    return redirect ('/tasks');
}

public function edit(Task $task)
{
return view('tasks.edit')->with('task', $task);

}

public function update(Task $task)
{
    $this -> validate(request(), [
        'name'=>'required|min:4|max:15',
        'description' => 'required'
    ]);
    $data = request()->all();
    $task->name = $data['name'];
    $task->description = $data['description'];
    $task->completed = false;

    $task->save();
    session()->flash('success','Task updated successfully');
    return redirect ('/tasks');


}
public function destroy(Task $task)
{

    $task->delete();
    session()->flash('success','Task Deleted successfully');

return redirect('/tasks');
}

public function complete(Task $task){
$task ->completed = true;
$task -> save();
    session()->flash('success','Task Completed successfully');
return redirect('/tasks');

}

}
