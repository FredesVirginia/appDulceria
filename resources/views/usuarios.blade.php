<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color2">
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
    <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

    </nav>
    <div class= "bg-color3">
        <a href="{{ route('usuarios') }}" class="no-underline  text-gray-400 font-bold text-xl">Usuarios Registrados </a>
    </div>

    <section class="text-white text-3xl">
        <h1>Datos de la Base de Datos</h1>
        @foreach ($compras as $compra)
        <h2>ID Compra: {{ $compra->id }}</h2>
        <h2>Precio Total: {{ $compra->precio_total }}</h2>
        <h2>Usuario: {{ $compra->user }}</h2>
    
        <h3>Productos en la compra:</h3>
        <ul>
            @foreach ($compra->productos as $producto)
                <li>ID Producto: {{ $producto->id }}, Cantidad: {{ $producto->pivot->cantidad }}</li>
            @endforeach
        </ul>
    @endforeach
    </section>

   
</body>
</html>