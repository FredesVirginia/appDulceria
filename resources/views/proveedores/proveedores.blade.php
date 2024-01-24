<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> NUEVOCaptura de Proveedores</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color2">
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
    <nav class="bg-color6 flex justify-evenly p-2">
        <a href="{{ route('proveedores') }}" class="no-underline text-white text-xl"> Proveedores</a>
<a href="{{ route('proveedores/crear') }}" class="no-underline text-white text-xl ">Captura de Proveedores</a>
<a href="{{ route('usuarios') }}" class="no-underline  text-white text-xl">Usuarios</a>

    </nav>

   <h1> Hola Proveedor Nuevo </h1>


   <div class="card">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <form  action="{{route('login')}}" method="POST" class="swiper-wrapper w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white">
        <!-- Slides -->
        <div class="swiper-slide">
            <img 
            class="w-[200px] h-[200px]"
           src="{{ asset('img/3.png') }}" alt="Descripción de la imagen">
          <h2>Welcome</h2>
          <input
          spellcheck="false"
          oninput="checkValid(event)"
          class=" inpuut border border-gray-200 rounded py-1 px-2 outline-none"
          type="text"
          name="email"
          placeholder="🌈 Email"
 
         
        />
         
          <button  class=" buttton"disabled type="button" onclick="gotoSlide(1)">Sigueinte</button>
        </div>
        <div class="swiper-slide">
          <div className="image-wrapper">
            <img 
            class="w-[200px] h-[200px]"
           src="{{ asset('img/4.png') }}" alt="Descripción de la imagen">
          </div>
          <h2>Security</h2>
          <h3>Enter a strong password</h3>
          <input
            oninput="checkValid(event)"
            class="inpuut border border-gray-200 rounded py-1 px-2 outline-none"
            type="password"
            name="password"
             placeholder="📩 Clave"
          />
         
          <button type="submit" disabled type="button" class=" buttton bg-color2 py-1  rounded shadow">Ingresar</button>
        </div>
       
       
    </form>
      <!-- If we need pagination -->
      
    </div>
  </div>
     
    
</body>
</html>