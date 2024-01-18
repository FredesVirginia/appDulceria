<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register user</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color2 flex flex-col justify-center items-center">
    <h1 class="text-white text-4xl font-bold text-center mt-8">Dulceria - "Los Golosos" </h1>
    <form action="{{route('registerUser')}}" method="POST"  class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
        @csrf
        <input
          class="border border-gray-200 rounded py-1 px-2 outline-none"
          type="text"
          name="name"
          placeholder="🌈Nombre"
 
         
        />

        <input
        class="border border-gray-200 rounded py-1 px-2 outline-none"
        type="email"
        name="email"
         placeholder="📩 Correo"
       
        
      />

        <input
          class="border border-gray-200 rounded py-1 px-2 outline-none"
          type="password"
          name="password"
           placeholder="📩 Clave"
         
          
        />
        <button class="bg-color2 py-1  rounded shadow">Registrar Usuario</button>
      </form>
</body>
</html>