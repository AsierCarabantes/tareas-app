<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <h1>Lista de departamentos</h1>

    <ul>
        @foreach ($departamentos as $departamento) 
            <li>{{ $departamento->nombre }} | {{ $departamento->responsable }}</li>
        @endforeach
    </ul>
    <a href="/departamentos/create">Añadir departamento</a>
</body>
</html>