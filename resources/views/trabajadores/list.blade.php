<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>
<body>
    <h1>Lista de trabajadores</h1>

    <ul>
        @foreach ($trabajadores as $trabajador)
            <li><a href="/trabajadores/show/{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</a> | {{ $trabajador->dni }}</li>
        @endforeach
    </ul>

    <a href="/trabajadores/create">Añadir trabajador</a>
</body>
</html>
