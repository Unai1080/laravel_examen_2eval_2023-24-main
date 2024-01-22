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
    <h1>Adminaren panela</h1>
    <ul>
    @foreach($ikasleak as $ikaslea)
    <li>
        <form action="/cicloanGehitu" method="post">
            @csrf
            <label>{{$ikaslea->nombre}}</label>
        </form>
        </li>
    @endforeach

</body>
</html>