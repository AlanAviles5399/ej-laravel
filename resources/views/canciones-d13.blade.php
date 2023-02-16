<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANCIONES</title>
</head>
<body>

    <h1>CANCIONES d13</h1>
    <h2>{{$otraVariable}}</h2>
 
    @if(is_null($cancion_seleccionada))   
 
 <ul>
    @foreach ($listaCanciones as $cancion)
        <li> {{$cancion['nombre'] }} - {{$cancion['artista']}} </li>
    @endforeach
 </ul>

 @else

    <h1>{{$cancion_seleccionada['nombre']}}</h1>
    <h2>{{$cancion_seleccionada['artista']}}</h2>

@endif



</body>
</html>