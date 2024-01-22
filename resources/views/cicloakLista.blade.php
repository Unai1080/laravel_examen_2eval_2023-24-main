<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="/">Hasiera</a>
    <hr>
    <h2>Cicloak</h2>
    <ul>
    @foreach($cursos as $curso)
        <li>{{$curso->nombre}}</li>
    @endforeach
</body>
</html>