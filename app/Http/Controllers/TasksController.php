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

}
