<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    @vite('resources/css/app.css')
</head>






<body class="bg-color1 flex flex-col justify-center items-center">
    <div id="loader" class="loader-container  hidden ">
        <!-- Agrega aquí tu código HTML para el loader -->
        <div class="loader"></div>
    </div>
    <div class="bg-color1 flex flex-col justify-center items-center">
        <h1 class="text-red-300 text-4xl font-bold text-center mt-8">Dulceria - "Los Golosos" </h1>

    </div>
    <form action="{{ route('login') }}" method="POST"
        class="form-container bg-white h-[440px] w-80 mt-9 flex flex-col gap-4 max-w-sm px-3 ">
        @csrf
        <div id="step1" class="form-step  active flex flex-col justify-center items-center">
            <div class="flex justify-center mt-6">
                <img class="w-[200px] h-[200px]" src="{{ asset('img/3.png') }}" alt="Descripción de la imagen">
            </div>
            <h2 class="text-3xl mb-6">Welcome</h2>
            <input class="border rounded py-2 w-64 px-2 mt-2 outline-none ring border-blue-600" type="email"
                name="email" placeholder="🌈 Email" required id="emailInput" />
            <div class="form-buttons mt-6">
                <button id="submitButton" style="color: #d1d5db; transition: color 0.3s ease-in-out;" disabled
                    type="button" onclick="nextStep()" class="bg-color2 py-1 px-24 rounded shadow">Siguiente</button>
            </div>
        </div>

        <div id="step2" class="form-step flex flex-col justify-center items-center">
            <div class="flex justify-center mt-6 mb-6">
                <img class="w-[200px] h-[200px]" src="{{ asset('img/4.png') }}" alt="Descripción de la imagen">
            </div>
            <input required class="  border border-blue-600 rounded py-1 w-[260px] outline-none ring" type="password"
                name="password" placeholder="📩 Clave" />
            <div class="form-buttons mt-6">
                <button onclick="vlogin()" id="submit" type="submit"
                    class="bg-color2 py-1 px-24 rounded shadow">Siguiente</button>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const emailInput = document.getElementById('emailInput');
                const submitButton = document.getElementById('submitButton');
                const submit = document.getElementById('submit');
                const loader = document.getElementById('loader');
                // Manejar el evento de entrada en el campo de correo
                emailInput.addEventListener('input', function() {
                    // Habilitar o deshabilitar el botón según si hay texto en el campo de correo
                    submitButton.disabled = !emailInput.value.trim();


                    submitButton.style.color = submitButton.disabled ? '#d1d5db' : '#1f2937';
                });
            });


            function vlogin() {
                showLoader();

                // Simula una solicitud de inicio de sesión (reemplázalo con tu lógica real)
                axios.post('{{ route('login') }}', {
                        email: emailInput.value,
                        password: claveInput.value // Asegúrate de enviar la contraseña correcta desde tu formulario
                    })
                    .then(function(response) {
                        // Manejar la respuesta del servidor después de la verificación
                        // Aquí puedes redirigir al usuario a la página de inicio
                        hideLoader();
                        window.location.href = '{{ route('home') }}'; // Reemplaza con tu ruta real
                    })
                    .catch(function(error) {
                        // Manejar el error, por ejemplo, mostrando un mensaje de error al usuario
                        hideLoader();
                        console.error(error);
                    });
            }

            function showLoader() {
                loader.style.display = 'flex';
            }

            function hideLoader() {
                loader.style.display = 'none';
            }

            function nextStep() {
                const step1 = document.getElementById('step1');
                const step2 = document.getElementById('step2');

                step1.classList.remove('active');
                step2.classList.add('active');

                // Oculta el paso anterior después de la transición
                setTimeout(() => {
                    step1.style.display = 'none';
                }, 800);
            }
        </script>

    </form>

    @error('email')
        <p class="text-red-800 font-bold">{{ $message }}</p>
    @enderror

    @error('password')
        <p class="text-red-800 font-bold">{{ $message }}</p>
    @enderror
    <div class="flex justify-center items-center mt-6">
        <p class=" text-gray-800 mr-6">Nuevo por Aqui? <a class="underline text-sky-600"
                href={{ route('register') }}>Registrarse</a></p>
    </div>
</body>

</html>
