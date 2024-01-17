<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body>
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
    <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('pro') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('capturasDeProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

    </nav>
</body>
</html>