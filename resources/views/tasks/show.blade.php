
@extends('layouts.app')
@section('title')
    Task:{{$yego->name}}
@endsection
@section('content')
    <div class="h1 text-center my-5">
        {{$yego->name}}
    </div>

 <div class="row justify-content-center">
     <div class="col-md-6">
         <div class="card card-default">
             <div class="card-header">
                 Details
             </div>
             <div class="card-body">
                 {{$yego->description}}
             </div>
         </div>
     </div>
 </div>

@endsection
