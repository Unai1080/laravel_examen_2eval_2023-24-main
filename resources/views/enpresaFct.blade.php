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
    <ul>
    @foreach($ikasleak as $ikasle)
        <li>
            <form action="/enpresaBilatu/{{$ikasle->id}}" method="get">
                @csrf
                {{$ikasle->nombre}}, {{$ikasle->apellido}}
                <input type="submit" value="Enpresa bat bilatu">
            </form>
        </li>
    @endforeach
    </ul>
</body>
</html>