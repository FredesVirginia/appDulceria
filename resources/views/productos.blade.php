<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos h</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color7">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('altaDeProductos') }}" class="no-underline text-white text-xl"> Alta de Productos</a>
<a href="{{ route('productos') }}" class="no-underline text-white text-xl ">Ver Productos</a>


        </nav>
         

    </section>

    
    <h1> Productos</h1>
    <section class="text-white text-3xl">
        <h1>Datos de la Base de Datos</h1>
        @foreach ($productos as $producto)
            <h2>
                <a href= "/producto/{{$producto->id}}"
                > {{$producto ->nombre}}</a>
            </h2>
        @endforeach
    </section>
</body>
</html>