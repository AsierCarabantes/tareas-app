<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir trabajador</title>
</head>
<body>
    <h1>Añadir trabajador</h1>

    <form action="/trabajadores/store" method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="dni" placeholder="DNI"><br><br>
        <input type="submit" value="Añadir trabajador">
    </form>
</body>
</html>
