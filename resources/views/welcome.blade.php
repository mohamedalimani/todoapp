<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>todo list</title>
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
    </head>
    <body class="antialiased">
@include('navbar')
<ol>
    <div class="list">
        <li>
            <form action="/tasks/create" method="POST">
                @csrf
                <input type="text" name="name" placeholder="task">
                <input type="text" name="note" placeholder="note">    
                <input type="submit" value="stick me" id="sub">
            </form>
        </li>
    </div><br>
    @foreach ($tasks as $task)
    <div class="list">
        <li>
            task {{$task->id}} : {{$task->name}}
        <form id="delbutton" action="{{route('destroy',$task->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button>X</button>
        </form>
            <p>{{$task->notes}}</p>
        </li>
    </div>
    <br>
    @endforeach
</ol>
<br>
        @include('footer') 
    </body>
</html>
