<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-color1 flex flex-col justify-center items-center">
    <h1 class="text-red-300 text-4xl font-bold text-center mt-8">Dulceria - "Los Golosos" </h1>
    <form  action="{{route('login')}}" method="POST"  class="w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
      @csrf
        <input
          class="border border-gray-200 rounded py-1 px-2 outline-none"
          type="text"
          name="email"
          placeholder="🌈 Email"
 
         
        />
        <input
          class="border border-gray-200 rounded py-1 px-2 outline-none"
          type="password"
          name="password"
           placeholder="📩 Clave"
         
          
        />
        <button class="bg-color2 py-1  rounded shadow">Ingresar</button>
      </form>

      @error('email')
      <p class="text-red-400">{{ $message }}</p>
  @enderror

  @error('password')
      <p class="text-red-400">{{ $message }}</p>
  @enderror
     <div class="flex justify-center items-center mt-6">
      <p class=" text-gray-800 mr-6">Nuevo por Aqui?  <a class="underline text-sky-600" href={{route('register')}}>Registrarse</a></p>
     </div>
</body>
</html>