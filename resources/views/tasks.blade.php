
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasks manager application </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <h1> TASKS PAGE</h1>
<ul class="">

    @foreach($tasks as $task)

        <li class="">
            {{$task->name}}
        </li>

    @endforeach
</ul>



    </div>
</div>
</body>
</html>
