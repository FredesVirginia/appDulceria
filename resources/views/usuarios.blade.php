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
        @foreach ($usuarios as $user)
            <h2>{{ $user->nombre }}</h2>
        @endforeach
    </section>

    <section class=" flex flex-col justify-center items-center">
        <form   class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
        
            <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="name"
              placeholder="👤 Nombre"/>

             

           
            <button class="bg-color2 py-1  rounded shadow">Registrar</button>
          </form>        
    </section>>
</body>
</html>