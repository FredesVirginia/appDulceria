<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite("resources/css/app.css")
</head>
<body class= " bg-color8">

   

    <section >
        <h1 class="text-white text-center font-bold text-4xl bg-color1 p-4"> Dulceria - Los Golosos  </h1>
        <nav class="bg-color6 flex justify-evenly p-2">
            <a href="{{ route('menu') }}" class="no-underline text-white text-xl font-bold"> Menu</a>
<a href="{{ route('puntoDeVista') }}" class="no-underline text-white text-xl font-bold ">Punto de Vista</a>


        </nav>


        <section class="flex justify-center" > 
            <video width="320" height="240" autoplay loop muted>
                <source src="{{ asset('img/v7.mp4') }}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>

          <div  class="flex flex-col text-center justify-center items-center">
            <h1 class="ml-10 bg-red-400 text-center text-green-800 font-bold"> </h1>
            @if(session('venta-creada'))
            <div class=" ml-10 text-center text-green-800 font-bold">
                {{ session('venta-creada') }}
            </div>
        @endif
        <form name="form"  action="{{route('compra')}}" method="POST" id="miFormulario" class="ml-10 w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
            @csrf
            <label class="text-green-400  font-bold">Productos</label>
            <select required id="producto" name="productoi" class="border border-gray-200 rounded py-1 px-2 outline-none">
                <option value="" disabled selected>Selecciona un producto</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" data-precio="{{ $producto->precio }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
            <label class="text-green-400  font-bold">Nombre de Usuario </label>
            <input   required type="text" name="usuario"  required class=" border rounded border-gray-400" >
            <div id="contenedorProductos"></div>

            <p class="text-green-400  font-bold" id="subtotal">Subtotal: $0.00</p>
            <p  class="text-green-400  font-bold" id="iva">IVA (21%): $0.00</p>
            <p class="  font-bold"id="totalCompra" name="total">Total: $0.00</p>
            <input type="hidden" name="productos[]" id="producto_idd" value="">
            <input type="hidden" name="cantidades[]" id="cantidad" value="" class="text-red-600">     
            <input type="hidden" name="total" id="total" value="" class="bg-red-300">
          
            <input type="hidden" name="productos_seleccionados" id="productos_seleccionados" value="[]">
            <button type="submit" id="botonEnviar" class="bg-color2 py-1  rounded shadow">Finalizar Compra</button>
            </form>
          </div>




                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                      
                        document.getElementById('miFormulario').addEventListener('submit', function(event) {
                            var productoSeleccionado = document.getElementById('producto').value;

if (productoSeleccionado === "") {
    alert('SELECCIONE UN PRODUCTO');
    event.preventDefault(); // Evita que el formulario se envíe si no se ha seleccionado un producto.
} else if (productoSeleccionado === "selecciona_producto") {
    alert('SELECIONE UN PRODUCTO');
    event.preventDefault(); // Evita que el formulario se envíe si se ha seleccionado la opción predeterminada.
} else {
    alert('¡Muy bien!');
    // Si todo está bien, el formulario se enviará normalmente
}
        });
                        var productoSelect = document.getElementById('producto');
                        var contenedorProductos = document.getElementById('contenedorProductos');
                        var subtotalP = document.getElementById('subtotal');
                        var ivaP = document.getElementById('iva');
                        var totalCompra = document.getElementById('totalCompra');
                        var total2 = document.getElementById('total');
                        var productosSeleccionadosInput = document.getElementById('productos_seleccionados');
                        var productosSeleccionados = [];
                
                        productoSelect.addEventListener('change', function() {
                            var selectedOption = productoSelect.options[productoSelect.selectedIndex];
                            var productoId = selectedOption.value;
                            var productoNombre = selectedOption.text;
                            var productoPrecio = parseFloat(selectedOption.getAttribute('data-precio'));
                
                            // Crear elementos HTML para el nuevo producto
                            var nuevoProductoDiv = document.createElement('div');
                            var cantidadInput = document.createElement('input');
                            cantidadInput.type = 'number';
                            cantidadInput.placeholder = 'Cantidad';
                            cantidadInput.required = true; 
                            cantidadInput.className = 'border border-gray-200 rounded py-1 px-2 outline-none';
                
                            var precioParrafo = document.createElement('p');
                            precioParrafo.textContent = 'Precio: $' + productoPrecio.toFixed(2);
                
                            // Agregar los elementos al contenedor de productos
                            nuevoProductoDiv.appendChild(document.createTextNode(productoNombre + ': '));
                            nuevoProductoDiv.appendChild(cantidadInput);
                            nuevoProductoDiv.appendChild(precioParrafo);
                
                            contenedorProductos.appendChild(nuevoProductoDiv);
                
                            // Manejar el evento de cambio en el input de cantidad
                            cantidadInput.addEventListener('input', function() {
                                calcularTotal();
                                actualizarProductosSeleccionados();
                            });
                
                            // Agregar el producto seleccionado a la lista
                            productosSeleccionados.push({ id: productoId, cantidad: cantidadInput });
                
                            // Calcular el total inicial al agregar un nuevo producto
                            calcularTotal();
                        });


                        
                
                        function calcularTotal() {
                            var subtotal = 0;
                
                            productosSeleccionados.forEach(function(producto) {
                                var cantidad = parseInt(producto.cantidad.value) || 0;
                                var precio = parseFloat(producto.cantidad.nextElementSibling.textContent.replace('Precio: $', '')) || 0;
                                subtotal += cantidad * precio;
                            });
                
                            var iva = subtotal * 0.21;
                            var total = subtotal + iva;
                
                            subtotalP.textContent = 'Subtotal: $' + subtotal.toFixed(2);
                            ivaP.textContent = 'IVA (21%): $' + iva.toFixed(2);
                            totalCompra.textContent = 'Total: $' + total.toFixed(2);
                            total2.value = total.toFixed(2);
                        }
                
                        function actualizarProductosSeleccionados() {
                            productosSeleccionadosInput.value = JSON.stringify(productosSeleccionados.map(function(item) {
                                return { id: item.id, cantidad: item.cantidad.value };
                            }));
                        }

                        var botonEnviar = document.getElementById('botonEnviar');

// Agregar un evento click al botón de envío para verificar la selección antes de enviar el formulario
botonEnviar.addEventListener('click', function() {
    var productoSeleccionado = document.getElementById('producto').value;

    if (!productoSeleccionado) {
        alert('Por favor, selecciona un producto antes de enviar el formulario.');
        // Evitar que el formulario se envíe si no se ha seleccionado un producto
        return false;
    }

    // Si todo está bien, el formulario se enviará normalmente
    return true;
});
                    });
                </script>

    </section>

   
</body>
</html>