<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del trabajador</title>
</head>
<body>
    <h1>Información del trabajador</h1>

    <p><b>Nombre completo:</b> {{ $trabajador->nombre }} {{ $trabajador->apellido }}</p>
    <p><b>DNI:</b> {{ $trabajador->dni }}</p><br>

    <p>Tareas:</p>
    <ul>
        @foreach ($tareas as $tarea)
            <li>{{ $tarea->descripcion }} | {{ $tarea->fecha_limite }}</li>
        @endforeach
    </ul>
</body>
</html>