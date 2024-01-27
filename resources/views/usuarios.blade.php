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
        <h1 class="no-underline p-2 text-center text-gray-400 font-bold text-3xl">Todas las Ventas </h1>
    </div>

    <section class="text-white text-3xl">
        
        <div class="flex justify-center">
            <div class=" grid grid-cols-3  gap-4 p-4 " >
                @foreach ($compras as $compra)
                <div class=" m-6 divs p-3 px-8 bg-gradient-to-b from-color3 to-green-600 ">
                    <p style="font-size : 20px"> Compra Nro : {{ $compra->id }}</p>
                    <p style="font-size : 20px">Usuario: {{ $compra->user }}</p>
                   
                  
                
                    <h3 style="font-size : 22px" class="text-black">Productos</h3>
                    <ul>
                        @foreach ($compra->productos as $producto)
                            <li style="font-size : 20px"> {{ $producto->nombre }}, Cantidad: {{ $producto->pivot->cantidad }}</li>
                        @endforeach
                    </ul>
                    <p style="font-size : 20px" class="text-black">Precio Total: {{ $compra->precio_total }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section>

   
</body>
</html>