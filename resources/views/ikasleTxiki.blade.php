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
    <h2>Adin txikiko ikasleak</h2>
    <form>
    <select name="" id="" value="Desarrollo de Aplicaciones Web">
            <option value="Desarrollo de Aplicaciones Web">Desarrollo de Aplicaciones Web</option>
            <option value="Administracion de Sistemas en Red">Administracion de Sistemas en Red</option>
            <option value="Desarrollo de Aplicaciones Multiplataforma">Desarrollo de Aplicaciones Multiplataforma</option>            
        </select>
    </form>
    <ul>
    @foreach($ikasleak as $ikasle)
        <li>{{$ikasle->nombre}}, {{$ikasle->apellido}}</li>
    @endforeach
    </ul>
    
</body>
</html>