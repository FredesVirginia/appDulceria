<?php

use App\Http\Controllers\ComprarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/',[LoginController::class,'create'])->name('welcome');
Route::post('/',[LoginController::class,'store'])->name('login');


Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('registerUser');


Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/puntoDeVista', function () {
    return view('puntoDeVista');
})->name('puntoDeVista');




Route::get('/home/',[ProductosController::class , 'index2'])->name('home');
Route::post('/home',[ComprarController::class,'store'])->name('compra');
Route::get('/altaDeProductos',[ProductosController::class,'create'])->name('altaDeProductos');
Route::post('/altaDeProductos',[ProductosController::class,'store'])->name('productoCrear');
Route::get('/productos',[ProductosController::class , 'index'])->name('productos');
Route::get('/producto/{id}',[ProductosController::class , 'show'])->name('producto');
Route::get('/productoEditar/{producto}',[ProductosController::class , 'edit'])->name('productoEditar');
Route::patch('/productoActualizar/{producto}',[ProductosController::class , 'update'])->name('productoActualizar');
Route::delete('/productoEliminar/{producto}',[ProductosController::class , 'destroy'])->name('productoEliminar');


Route::get('/proveedores',[ProveedoresController::class , 'index'])->name('proveedores');
Route::get('/proveedor/{id}',[ProveedoresController::class , 'show'])->name('proveedor');
Route::get('/proveedores/crear', [ProveedoresController::class,'create'])->name('crearProveedores');
Route::post('/proveedores/crear', [ProveedoresController::class,'store'])->name('proveedoresCrear');
Route::patch('/proveedorActualizar/{proveedor}',[ProveedoresController::class , 'update'])->name('proveedorActualizar');
Route::delete('/proveedorEliminar/{proveedor}',[ProveedoresController::class , 'destroy'])->name('proveedorEliminar');



Route::get('/usuarios', [UserController::class , 'index'])->name('usuarios');



