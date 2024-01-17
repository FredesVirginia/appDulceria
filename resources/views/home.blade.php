<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color8">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('menu') }}" class="no-underline text-white text-xl font-bold"> Menu</a>
<a href="{{ route('puntoDeVista') }}" class="no-underline text-white text-xl font-bold ">Punto de Vista</a>


        </nav>
         <div class= "flex justify-center p-6  bg-color8 h-full">
            <video width="320" height="240" autoplay loop muted>
                <source src="{{ asset('img/v7.mp4') }}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
            
         </div>

    </section>
</body>
</html>