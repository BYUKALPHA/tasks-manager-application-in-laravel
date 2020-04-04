@extends('layouts.app')
@section('title') Tasks list @endsection

@section('content')
        <h1 class="text-center  my-5"> TASKS PAGE</h1>

       <div class="row justify-content-center">
           <div class="col-md-8">
                  <div class="card card-success">
                       <div class="card-header">
                       Tasks
                        </div>
                   <div class="card-body">
                       <ul class="list-group">

                           @foreach($tasks as $task)

                               <li class="list-group-item">
                                   {{$task->name}}

                                  @if(!$task->completed)
                                       <a href="/tasks/{{$task->id}}/complete" style="color:white" class="btn btn-warning btn-sm float-right">Completed</a>
                                      @endif
                                   <a href="/tasks/{{$task->id}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                               </li>

                           @endforeach
                       </ul>
                   </div>
               </div>
           </div>
       </div>

@endsection
