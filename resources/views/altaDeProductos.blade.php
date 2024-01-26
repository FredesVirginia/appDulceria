<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta de Productos</title>
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

    <section class=" flex flex-col justify-center items-center">
        <form action="{{route('productoCrear')}}" method="POST"  class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
            @csrf
            <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="nombre"
              required
              placeholder="Nombre"/>
             
              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="number"
              name="precio"
              required
              placeholder=" Precio"/>
             
              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="number"
              name="stock"
             required
              placeholder="Stock"/>

              

           
            <button class="bg-color2 py-1  rounded shadow">Registrar</button>
          </form>        
    </section>
</body>
</html>