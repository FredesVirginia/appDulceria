<?php

namespace App\Http\Controllers;
use App\Models\UserAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compra;
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
  // Obtener datos del formulario
  $productos = $request->input('productos');
    $productosString = json_encode($productos);

    // Obtener el precio total del formulario
  
    $precioTotal = $request->input('total'); // Asegúrate de tener un campo total en tu formulario
    // Crear la compra
    $compra = Compra::create([
       
        'productos' => $productosString,
        'precio_total' => $precioTotal,
    ]);

    $compra->save();
    //redirecionando 
    return redirect()->route('home');
}
}

?>