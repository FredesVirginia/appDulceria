<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Producto::get();
       
        return view ('productos' , ['productos' => $productos]) ;
    }


    public function index2()
    {
        //
        $productos = Producto::get();
       
        return view ('home' , ['productos' => $productos]) ;
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view ('altaDeProductos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
       $producto = new Producto;
       $producto->nombre = $request->input('nombre');
       $producto->precio = $request->input('precio');
       $producto->cantidad = $request->input('stock');

       $producto->save();
       //redirecionando 
       return redirect()->route('productos');

    }

    /**
     * Display the specified resource.
     */
    public function show( Producto $id)
    {
        return view('producto' , ['producto' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productoEditar' , ['producto'  => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('stock');
 
        $producto->save();
        //redirecionando 
        return redirect()->route('productos' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return to_route('productos');
    }
}