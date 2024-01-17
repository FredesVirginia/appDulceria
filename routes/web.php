<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;
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
});




Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/puntoDeVista', function () {
    return view('puntoDeVista');
})->name('puntoDeVista');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/altaDeProductos',[ProductosController::class,'create'])->name('altaDeProductos');
Route::post('/altaDeProductos',[ProductosController::class,'store'])->name('productoCrear');
Route::get('/productos',[ProductosController::class , 'index'])->name('productos');
Route::get('/producto/{id}',[ProductosController::class , 'show'])->name('producto');
Route::get('/productoEditar/{producto}',[ProductosController::class , 'edit'])->name('productoEditar');
Route::patch('/productoActualizar/{producto}',[ProductosController::class , 'update'])->name('productoActualizar');
Route::delete('/productoEliminar/{producto}',[ProductosController::class , 'destroy'])->name('productoEliminar');
Route::get('/pro', function () {
    return view('pro');
})->name('pro');

Route::get('/capturasDeProveedores', function () {
    return view('capturasDeProveedores');
})->name('capturasDeProveedores');

Route::get('/usuarios', [UserController::class , 'index'])->name('usuarios');



