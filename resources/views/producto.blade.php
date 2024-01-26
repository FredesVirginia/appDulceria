<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color7">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('altaDeProductos') }}" class="no-underline text-white text-xl"> Alta de Productos</a>
<a href="{{ route('productos') }}" class="no-underline text-white text-xl ">Ver Productos</a>


        </nav>
         

    </section>

    
   <h1>{{$producto->nombre}}</h1> &nbsp;
   <a href={{route('productoEditar' , $producto)}}>Editar</a>
   
   <form action="{{route('productoEliminar' , $producto)}}" method="POST">
        @csrf
        @method('DELETE')  
        <button type="submit">Delete</button>  
</form>
   <a href={{route('productos')}}>Regresar</a>
</body>
</html>