<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
</head>

<body>

    <form action="contacto" method="post">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        @error('nombre')
            <h4> {{ $message }} </h4>
        @enderror
        <br>
        <label for="codigo">Código:</label><br>
        <input type="number" name="codigo" id="codigo"><br>
        @error('codigo')
            <h4> {{ $message }} </h4>
        @enderror
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>