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
    <h1 class="text-white text-center font-bold text-4xl bg-color8 p-4 w-full mt-4"> Dulceria - Los Golosos </h1>
    <form action="{{ route('registerUser') }}" method="POST" class="w-80 h-[400px] rounded shadow  mt-9 flex flex-col justify-center items-center gap-4 max-w-sm pt-6 pb-8 px-3 bg-white">
        @csrf
        <h2 class="bg-color8 p-4 w-full text-center text-white text-2xl mb-4"> Registro de Usuario</h2>

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


      <button  id="submitButton" class=" bg-color2 py-1 w-[260px] font-bold rounded shadow text-green-100" disabled>Registrar</button>
        
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
   
</body>

</html>
