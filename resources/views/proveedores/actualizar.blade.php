<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color11">
    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
            <a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
            <a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>


        </nav>
         

    </section>

    
    <h1 class="text-center text-2xl text-white  mt-10"> Editar Proveedor</h1>
   

    <section class=" flex flex-col justify-center items-center">
        
        <form   action="{{route('proveedorActualizar' , $proveedor)}}" method="POST"  class="w-80  mt-9 flex flex-col rounded gap-4 max-w-sm py-8 px-3 bg-white ">
            @csrf @method('PATCH')
            
            <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="nombre"
              required
              placeholder="Nombre"
              value="{{ $proveedor->nombre}}"
              />
             
              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="dirreccion"
              required
              placeholder="Dirreccion"
              value="{{$proveedor->dirreccion}}"
              />
             
              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="telefono"
             required
              placeholder="Telefono"
              value="{{ $proveedor->telefono}}"
              />

              <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="empresa"
             required
              placeholder="Empresa"
              value="{{ $proveedor->empresa}}"
              />

              

           
            <button class="bg-color2 py-1  rounded shadow">Guardar Cambios</button>
          </form>        
          <button class="bg-color1 py-1 px-3 mt-4  rounded shadow">Canselar</button>
    </section>



    </body>
</html>