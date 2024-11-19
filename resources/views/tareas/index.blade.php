<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>  
    <h1>Lista de tareas</h1>

    <ul>
        @foreach ($tareas as $tarea) 
            <li><a href="/tareas/edit/{{ $tarea->id }}">{{ $tarea->descripcion }}</a> | {{ $tarea->fecha_limite }} | {{ $tarea->trabajador_id }}</li>
        @endforeach
    </ul>
    

    <a href="/tareas/create">Añadir tarea</a>
</body>
</html>
