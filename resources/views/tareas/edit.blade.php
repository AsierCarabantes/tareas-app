<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarea</title>
</head>
<body>
    <h1>Editar tarea</h1>

    <form action="/tareas/update/{{ $tarea->id }}" method="POST">
        @csrf
        @method("PUT")
        <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}"><br>
        <input type="text" name="descripcion" value="{{ $tarea->descripcion }}"><br>
        <select name="trabajador_id" id="trabajadores">
            @foreach ($trabajadores as $trabajador)
            <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Editar tarea">
    </form><br>
    <form action="/tareas/destroy/{{ $tarea->id }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Eliminar tarea">
    </form>
</body>
</html>