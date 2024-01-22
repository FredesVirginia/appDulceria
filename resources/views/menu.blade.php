


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color7">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('pro') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

        </nav>
         <div class= "flex justify-center p-4  bg-color7 h-full">
            <img 
         class="w-[400px] h-[480px]"
        src="{{ asset('img/dulce.jpg') }}" alt="Descripción de la imagen">
         </div>

    </section>
</body>
</html>