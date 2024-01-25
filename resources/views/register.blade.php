<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register user</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-color2 flex flex-col justify-center items-center">
    <div id="loader" class="loader-container  hidden ">
        <!-- Agrega aquí tu código HTML para el loader -->
        <div class="loader"></div>
    </div>
    <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4 w-full mt-4"> Dulceria - Los Golosos </h1>
    <form action="{{ route('registerUser') }}" method="POST"
        class="w-80  rounded shadow  mt-9 flex flex-col justify-center items-center gap-4 max-w-sm py-8 px-3 bg-white ">
        @csrf


        <div class="textbox">
            <input type="text" name="name" required class="rounded py-1 px-16 outline-none" />
            <label> 🌈Name</label>

        </div>

        <div class="textbox">
            <input type="text" required type="email" name="email" class="rounded py-1 px-16 outline-none" />
            <label> 📩 Correo</label>

        </div>

        <div class="textbox">
            <input required type="password" name="password" class="rounded py-1 px-16 outline-none" />
            <label> 📩 Clave"</label>

        </div>



        <button class="bg-color2 py-1 w-[260px]  rounded shadow">Registrar Usuario</button>
    </form>

   
</body>

</html>
