<?php

namespace App\Http\Controllers;
use App\Models\UserAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
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
    $credential = $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);

    // Aquí lo verificamos, el segundo parametro es para recordar la seccion

    if (!Auth::attempt($credential)) {
        throw ValidationException::withMessages([
            'email' => ('CREDENCIALES INCORRECTAS')
        ]);
    }

    //en esta parte del codigo, se redicciona a la seccion luego de haber hecho
    //login, o en la parte donde quiso entrar luego de hacer login, 
    //eso hace el metodo intended

    $request->session()->regenerate();

    return redirect()->route('home');
    

}
}