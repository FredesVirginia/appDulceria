<?php

namespace App\Http\Controllers;
use App\Models\UserAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compra;
use App\Models\Comprai;
use App\Models\Producto;
use App\Http\Livewire\VentaCreada;
use Illuminate\Validation\ValidationException;
class ComprarController extends Controller
{
    public function index()
    {
        //
        $productos = UserAdministrativo::get();
       
        return view ('user' , ['user' => $productos]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view ('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        // Crear la compra con el precio total
        $compra = Compra::create([
            'precio_total' => $request->input('total'),
            'user' => $request->input('usuario'),
        ]);
    
        // Obtener el array de productos y cantidades
        $productosCantidades = json_decode($request->input('productos_seleccionados'), true);
    
        // Adjuntar productos a la compra
        foreach ($productosCantidades as $productoCantidad) {
            // Verifica si la clave 'id' y 'cantidad' están presentes en el array antes de intentar acceder
            if (array_key_exists('id', $productoCantidad) && array_key_exists('cantidad', $productoCantidad)) {
                // Verifica si el producto con ese ID existe en la base de datos
                $producto = Producto::find($productoCantidad['id']);
    
                if ($producto) {
                    // Adjuntar el producto a la compra con la cantidad
                    $compra->productos()->attach($producto->id, ['cantidad' => $productoCantidad['cantidad']]);
                }
            }
        }
    
        session()->flash('venta-creada', 'Venta creada correctamente');
        // Redireccionar
        return redirect()->route('home');
    }
}


?>