<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
         return view ('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
       $user = new User();
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->password = bcrypt($request->input('password'));

       $user->save();
       //redirecionando 
       return redirect('/');

    }

   
   
    
}