<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

@if($course)
<form action="/update-course/{{$course->id}}" method="post">
        @csrf
    <label for="">course name: </label>
    <input type="text" name="name" value="{{$course->name}}"><br><br>
    <label for="">details: </label>
    <input type="text" name="details" value="{{$course->details}}"><br><br>
    <input type="submit" name="save" value="update">
    <input type="reset" name="reset" value="reset">
    </form>
    @endif
    </body>
</html>