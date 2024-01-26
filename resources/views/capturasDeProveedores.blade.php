<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captura de Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color2">
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
    <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('pro') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('capturasDeProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

    </nav>

    <section class=" flex flex-col justify-center items-center">
        <form   class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
        
            <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="name"
              placeholder="👤 Nombre"
              required
              />

              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="telefono"
              placeholder="📞 Telefono"
              required
              />

              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="dirreccion"
              placeholder="🏘 Dirreccion"
              required
              />

              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="empresa"
              placeholder="🏛 Empresa"
              required/>


           
            <button class="bg-color2 py-1  rounded shadow">Registrar</button>
          </form>        
    </section>>
</body>
</html>