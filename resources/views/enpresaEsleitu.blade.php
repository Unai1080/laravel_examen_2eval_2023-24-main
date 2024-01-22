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
    <h2>{{$ikaslea->nombre}}-ri enpresa esleitu</h2>
    <ul>
    @foreach($enpresak as $enpresa)
        <li>
            <form action="/enpresaEsleitu" method="post">
                @csrf
                {{$enpresa->nombre}}
                <input type="hidden" name="ikaslea" value="{{$ikaslea->id}}">
                <input type="hidden" name="enpresa" value="{{$enpresa->id}}">
                <input type="submit" value="Enpresa hau ezarri">
            </form>
        </li>
    @endforeach
    </ul>
</body>
</html>