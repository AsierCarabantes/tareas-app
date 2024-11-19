<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir departamento</title>
</head>
<body>
    <h1>Añadir departamento</h1>

    <form action="/departamentos/store" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <select name="responsable">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Añadir departamento">
    </form>
</body>
</html>