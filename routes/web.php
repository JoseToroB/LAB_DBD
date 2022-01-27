<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VistaController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\RolController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ventana register
Route::get('/register',[RegisterController::class,'register']);
//ventana incio-> login
Route::get('/', function () {
    return view('login');
});
//intentar logear
Route::post('/loginAttempt',[LoginController::class,'login'])->name('logearse');
//ventana  principal, donde estan los libros expuestos
Route::get('/Home',[VistaController::class,'mostrarHome'])->name('ingresando');
//ventana de un solo libro
Route::get('/verLibro/{id}',[LibroController::class,'vistaLibro'])->name('vistaLibro');
//ventana de crear un libro
Route::get('/crearLibro',[VistaController::class,'adminCrearLibro']);
//ventana modificar un libro





//Ruta para la clase libro
Route::get('/libro',[LibroController::class,'index']);
Route::get('/libro/{id}',[LibroController::class,'show']);
Route::post('/libro/create',[LibroController::class,'store'])->name('finalCrearLibro');
Route::delete('/libro/destroy/{id}',[LibroController::class,'destroy']);
//Ruta para la clase Rol
Route::get('/rols',[RolController::class,'index']);
Route::get('/rols/{id}',[RolController::class,'show']);
Route::post('/rols/create',[RolController::class,'store']);
Route::delete('/rols/destroy/{id}',[RolController::class,'destroy']);
//Ruta user
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/users/create',[UserController::class,'store'])->name('finalRegister');
Route::delete('/users/destroy/{id}',[UserController::class,'destroy']);