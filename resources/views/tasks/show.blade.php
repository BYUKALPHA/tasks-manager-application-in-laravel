
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

</div>

</body>
</html>
