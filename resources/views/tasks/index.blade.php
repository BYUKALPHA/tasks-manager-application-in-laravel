
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Tasks manager application </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
    <div class="container">
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
                                   <div class="btn btn-primary btn-sm float-right">View</div>
                               </li>

                           @endforeach
                       </ul>
                   </div>
               </div>
           </div>
       </div>
    </div>

</body>
</html>
