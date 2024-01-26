<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Captura de Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color2">
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> <a href="{{ route('home') }}" class="no-underline text-white text-3xl font-bold"> Dulceria - Los Golosos</a> </h1>
    <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('crearProveedores') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

    </nav>

    <section class=" flex flex-col justify-center items-center">
        @if(session('proveedor'))
        <div class=" mt-10 text-center text-green-800 font-bold">
            {{ session('proveedor') }}
        </div>
    @endif
        <form action="{{route('proveedoresCrear')}}" method="POST"  class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-10 bg-white ">
            @csrf
            <input
              class="border border-gray-200 rounded py-1 px-2 outline-none"
              type="text"
              name="nombre"
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


           
            <button  id="submitButton" class="bg-color2 py-1  rounded shadow">Registrar</button>
          </form>  
          <script>
            document.addEventListener('DOMContentLoaded', function () {
                const inputs = document.querySelectorAll('input');
                const submitButton = document.getElementById('submitButton');
    
                function checkInputs() {
                    const areAllInputsFilled = Array.from(inputs).every(input => input.value.trim() !== '');
                    submitButton.disabled = !areAllInputsFilled;
    
                    if (areAllInputsFilled) {
                        submitButton.classList.remove('text-green-100');
                        submitButton.classList.add('text-red');
                    } else {
                        submitButton.classList.remove('text-red');
                        submitButton.classList.add('text-green-100');
                    }
                }
    
                inputs.forEach(input => {
                    input.addEventListener('input', checkInputs);
                });
            });
        </script>      
    </section>
</body>
</html>