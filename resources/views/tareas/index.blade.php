<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Lista tareas</h1>
    <ul>
        @foreach ($tareas as $tarea)
            <li>Título: {{ $tarea->titulo }} | Descripción: {{ $tarea->descripcion }}</li>
        @endforeach
    </ul>

    <br>

    <a href="/tareas/create">Añadir tareas</a>
    <a href="/tareas/edit">Modificar tareas</a>
</body>
</html>