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
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
            <a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
            <a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>


        </nav>
         

    </section>

    
    <h1> Proveedores</h1>
    <section class="text-white text-3xl">
        <h1>Datos de la Base de Datos</h1>
         <section class="flex justify-center"> 
           <section  class="grid grid-cols-2  gap-4 p-4">
            @foreach ($proveedores as $proveedor)
            <div class="bg-red-400">
             <h1> {{$proveedor->nombre}}</h1>
             <h2> {{$proveedor->telefono}}</h2>
             <h3> {{$proveedor->dirreccion}}</h3>
             <h4> {{$proveedor->empresa}}</h4>
            </div>
         @endforeach
           </section>
         </section>
    </section>
</body>
</html>