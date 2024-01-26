<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color7">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
            <a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
            <a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>


        </nav>
         

    </section>

    
    <h1 class="text-center text-3xl text-white  m-10"> Proveedores Captados</h1>
   <div class="flex justify-center">
   <div class=" grid grid-cols-3  gap-4 p-4">
    @foreach ($proveedores as $proveedor)
    <label id="sumary class="bg-gradient-to-b from-color1 to-color2 ">
        <input  type="checkbox" class=" input bg-gradient-to-b from-color1 to-color2"/>
      
           <article class="bg-gradient-to-b from-color1 to-color2">
            <div class=" bg-gradient-to-b from-color9 to-color6 front">
                <header class=" flex flex-col">
                    <h2 class="font-bold text-2xl">{{$proveedor->nombre}}</h2>
                    <h2>
                         {{$proveedor ->nombre}}
                    </h2>
                    <p class="mt-20"> Mostrar mas </p>
                </header>
             </div>
             <div class="back">
                <header class="flex flex-col space-y-6">
                    <h2 class="font-bold">{{$proveedor->empresa}} </h2>
                    <h3 class="text-pretty"> {{$proveedor->dirreccion}}</h3>
                    <p> {{$proveedor->telefono}}</p>
                   <div class="flex space-x-10">
                    <a href= "/proveedor/{{$proveedor->id}}"> Editar</a>
                    <form action="{{route('proveedorEliminar' , $proveedor)}}" method="POST">
                        @csrf
                        @method('DELETE')  
                        <button type="submit">Borrar</button>  
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