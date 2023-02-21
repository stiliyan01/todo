<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("store")}}" method="POST">
        @csrf
        <input type="text" name="task">
        <input type="submit" name="submit">


    </form>
   
        @if(count($todoList))
        <ul>
        @foreach ($todoList as $task)
                <li>{{$task->task}}</li>
            <form action="{{route ('destroy',$task->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">x</button>
        @endforeach
        </ul>
    
            
        @else
            <p>NO TASKS!</p>
       
        @endif
</body>
</html>