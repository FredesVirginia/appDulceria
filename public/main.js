
document.addEventListener("DOMContentLoaded", function () {
  const emailInput = document.getElementById('emailInput');
  const submitButton = document.getElementById('submitButton');
  const submit = document.getElementById('submit');
  const loader = document.getElementById('loader');
  // Manejar el evento de entrada en el campo de correo
  emailInput.addEventListener('input', function () {
      // Habilitar o deshabilitar el botón según si hay texto en el campo de correo
      submitButton.disabled = !emailInput.value.trim();

      
      submitButton.style.color = submitButton.disabled ? '#d1d5db' : '#1f2937';
  });
});
 

function vlogin() {
      showLoader();

      // Simula una solicitud de inicio de sesión (reemplázalo con tu lógica real)
      axios.post('{{ route("login") }}', {
          email: emailInput.value,
          password: claveInput.value // Asegúrate de enviar la contraseña correcta desde tu formulario
      })
      .then(function (response) {
          // Manejar la respuesta del servidor después de la verificación
          // Aquí puedes redirigir al usuario a la página de inicio
          hideLoader();
          window.location.href = '{{ route("home") }}'; // Reemplaza con tu ruta real
      })
      .catch(function (error) {
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
