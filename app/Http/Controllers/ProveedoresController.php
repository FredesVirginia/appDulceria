<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedores = Proveedor::get();
       
        return view ('proveedores.index' , ['proveedores' => $proveedores]) ;
    }


    




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view ('proveedores.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
       $proveedor = new Proveedor();
       $proveedor->nombre = $request->input('nombre');
       $proveedor->telefono = $request->input('telefono');
       $proveedor->dirreccion = $request->input('dirreccion');
        $proveedor->empresa = $request->input('empresa');
        if ($proveedor->save()) {
            // Si el guardado es exitoso, puedes redirigir con un mensaje de éxito
            session()->flash('proveedor','Registro de Proveedor CORRECTO');
        } else {
            // Si hay un problema en el guardado, redirige con un mensaje de error
            session()->flash('proveedor', 'Uii ocurrio un Error. Intetelo de Nuevo');
        }

        return redirect()->route('crearProveedores');

    }


    public function show( Proveedor $id)
    {
        return view('proveedores.actualizar' , ['proveedor' => $id]);
    }


    public function update(Request $request, Proveedor $proveedor)
    {
        $proveedor->nombre = $request->input('nombre');
        $proveedor->empresa = $request->input('empresa');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->dirreccion = $request->input('dirreccion');
 
        $proveedor->save();
        //redirecionando 
        return redirect()->route('proveedores' );
    }
    

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return to_route('proveedores');
    }
  
}