<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href=""></a></li>
    </ul>
  </nav>
    <form action="/create" method="post">
        @csrf
    <label for="">course name: </label>
    <input type="text" name="name"><br><br>
    <label for="">details: </label>
    <input type="text" name="details"><br><br>
    <input type="submit" name="save" value="save">
    <input type="reset" name="reset" value="reset">
    </form>
    
</body>
</html>