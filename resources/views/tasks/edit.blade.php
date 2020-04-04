@extends('layouts.app')
@section('title') Edit Task @endsection

@section('content')

    <h1 class="text-center my-5">Edit Task</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">Edit Task</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <div class="ul list-group">
                                @foreach($errors->all() as $error)
                                    <div class="li list-group-item">
                                        {{$error}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <form action="/tasks/{{$task->id}}/update-tasks" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$task->name}}">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"> {{$task->description}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Task</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>

@endsection

