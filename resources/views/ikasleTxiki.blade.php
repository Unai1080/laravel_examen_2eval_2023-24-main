<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Adin txikiko ikasleak</h2>
    <ul>
    @foreach($ikasleak as $ikasle)
        <li>{{$ikasle->nombre}}, {{$ikasle->apellido}}</li>
    @endforeach
    </ul>
    
</body>
</html>