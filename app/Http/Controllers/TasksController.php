<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
public function index(){

    return view('tasks.index')->with('tasks',Task::All());
}
}
