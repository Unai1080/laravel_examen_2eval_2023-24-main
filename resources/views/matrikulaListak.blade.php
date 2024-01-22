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
    <h2>Matrikulatu gabe dauden ikasleak</h2>
    <ul>
    @foreach($ikasleak as $ikasle)
        <li>
        <form action="/ikasleAukeratu" method="get">
            @csrf
            <label>{{$ikasle->nombre}}, {{$ikasle->apellido}}</label>
            <input type="submit" value="aukeratu">
        </form>
        </li>
        
    @endforeach
    </ul>
</body>
</html>