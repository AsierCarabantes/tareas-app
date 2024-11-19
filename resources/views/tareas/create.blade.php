<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir tarea</title>
</head>
<body>
    <h1>Añadir tarea</h1>
    
    <form action="/tareas/store" method="POST">
        @csrf
        <input type="date" name="fecha_limite"><br>
        <input type="text" name="descripcion" placeholder="Descripcion"><br>
        <select name="trabajador_id" id="trabajadores">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Añadir tarea">
    </form>
</body>
</html>
