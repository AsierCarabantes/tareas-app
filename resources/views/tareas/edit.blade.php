<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaciones</title>
</head>
<body>
    <h1>Actualizar tareas</h1>
    <form action="/tareas/update{$id}" method="POST">
    @csrf
    @method('PUT')
        <input type="text" name="nombre" placeholder="Título"><br>
        <textarea type="text" name="descripcion" placeholder="Descripción"></textarea><br>
        <input type="date" name="fecha_limite"><br>
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador) 
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }} </option>
            @endforeach
        </select>
        <input type="submit" value="Actualizar">
    </form><br>
</form>

</body>
</html>
