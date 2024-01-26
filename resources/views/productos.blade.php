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
     <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('altaDeProductos') }}" class="no-underline text-white text-xl"> Alta de Productos</a>
<a href="{{ route('productos') }}" class="no-underline text-white text-xl ">Ver Productos</a>


        </nav>
         

    </section>

    
    <h1 class="text-4xl text-center text-white p-4 mt-4"> Productos</h1>
    <div class="flex justify-center">
        <div class=" grid grid-cols-3  gap-4 p-4">
            @foreach ($productos as $producto)
                <label id="sumary class="bg-gradient-to-b from-color1 to-color2 ">
             <input  type="checkbox" class=" input bg-gradient-to-b from-color1 to-color2"/>
           
                <article class="bg-gradient-to-b from-color1 to-color2">
                 <div class=" bg-gradient-to-b from-color9 to-color6 front">
                     <header class=" flex flex-col">
                         <h2 class="font-bold text-2xl">{{ $producto->nombre }}</h2>
                         
                         <p class="mt-20"> Mostrar mas </p>
                     </header>
                  </div>
                  <div class="back">
                     <header class="flex flex-col space-y-6">
                         <h2 class="font-bold">Precio : {{ $producto->precio }} </h2>
                         <h3 class="text-pretty"> Cantidad : {{ $producto->cantidad }}</h3>
                         
                        <div class="flex space-x-10">
                         <a href={{route('productoEditar' , $producto)}}>Editar</a>
                         <form action="{{route('productoEliminar' , $producto)}}" method="POST">
        @csrf
        @method('DELETE')  
        <button type="submit">Delete</button>  
</form>
                        </div>
                        
                     </header>
                    
                  </div>
     
                </article>
         </label>
 @endforeach
        </div>
    </div>
</body>
</html>