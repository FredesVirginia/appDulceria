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

            <form  action="{{route('compra')}}" method="POST"  class="ml-10 w-80  mt-9 flex flex-col gap-4 max-w-sm py-8 px-3 bg-white ">
                @csrf
                  <label>Productos</label>
                  <select id="producto" name="producto" class="border border-gray-200 rounded py-1 px-2 outline-none">
                    @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" data-precio="{{ $producto->precio }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
                <div id="contenedorProductos"></div>

                <p id="subtotal">Subtotal: $0.00</p>
                <p id="iva">IVA (21%): $0.00</p>
                <p id="totalCompra" name="total">Total: $0.00</p>
                <input type="hidden" name="productos[]" id="producto_id" value="">
                <input type="hidden" name="cantidades" id="cantidad" value="" class="text-red-600">     
                <input type="hidden" name="total" id="total" value="">
                <button class="bg-color2 py-1  rounded shadow">Finalizar Compra</button>
                </form>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var productoSelect = document.getElementById('producto');
                        var contenedorProductos = document.getElementById('contenedorProductos');
                        var subtotalP = document.getElementById('subtotal');
                        var ivaP = document.getElementById('iva');
                        var totalCompra = document.getElementById('totalCompra');
                        var productoIdInput = document.getElementById('producto_id');
                        var cantidadInput = document.getElementById('cantidad');
                
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
                            cantidadInput.className = 'border border-gray-200 rounded py-1 px-2 outline-none';
                
                            var precioParrafo = document.createElement('p');
                            precioParrafo.textContent = 'Precio: $' + productoPrecio.toFixed(2);
                
                            // Agregar los elementos al contenedor de productos
                            nuevoProductoDiv.appendChild(document.createTextNode(productoNombre + ': '));
                            nuevoProductoDiv.appendChild(cantidadInput);
                            nuevoProductoDiv.appendChild(precioParrafo);
                
                            contenedorProductos.appendChild(nuevoProductoDiv);
                
                            // Asignar valores a los campos ocultos
                            productoIdInput.value = productoId;
                           
                            cantidadInput.value = cantidad;
                            // Manejar el evento de cambio en el input de cantidad
                            cantidadInput.addEventListener('input', function() {
                                calcularTotal();
                            });
                
                            // Calcular el total inicial al agregar un nuevo producto
                            calcularTotal();
                        });
                
                        function calcularTotal() {
                            var productos = contenedorProductos.querySelectorAll('div');
                            var subtotal = 0;
                
                            productos.forEach(function(producto) {
                                var cantidad = parseInt(producto.querySelector('input').value) || 0;
                                var precio = parseFloat(producto.querySelector('p').textContent.replace('Precio: $', '')) || 0;
                                subtotal += cantidad * precio;
                            });
                
                            var iva = subtotal * 0.21;
                            var total = subtotal + iva;
                
                            subtotalP.textContent = 'Subtotal: $' + subtotal.toFixed(2);
                            ivaP.textContent = 'IVA (21%): $' + iva.toFixed(2);
                            totalCompra.textContent = 'Total: $' + total.toFixed(2);
                        }
                    });
                </script>
        </section>
        

    </section>
</body>
</html>