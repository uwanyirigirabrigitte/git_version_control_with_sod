<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>details</th>
</tr>

    @foreach($courses as $course) 

 <tr>
 <td>{{$course->id}}</td>
 <td>{{$course->name}}</td>
 <td>{{$course->details}}</td>
 <td><a href='/edit/{{$course->id}}'>edit</a></td>
 <td><a href='/delete/{{$course->id}}'>delete</a></td>
 </tr>
@endforeach
    </table> 
</body>
</html>
