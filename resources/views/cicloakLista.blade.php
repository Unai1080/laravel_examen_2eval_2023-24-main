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
    <h2>{{$ikaslea->nombre}}-rentzako Cicloak</h2>
    <ul>
    @foreach($cursos as $curso)
    <li>
        <form action="/cicloanGehitu" method="post">
            @csrf
            <label>{{$curso->nombre}}</label>
            <input type="hidden" value="{{$ikaslea->id}}" name="ikaslea">
            <input type="hidden" value="{{$curso->id}}" name="ciclo">
            <input type="submit" value="apuntatu">
        </form>
        </li>
    @endforeach
</body>
</html>