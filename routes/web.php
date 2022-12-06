<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\{ServiciosController,ClientesController,AgendaController,UsuariosController,TestController};


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
//va al controlador HomeController y ejecuta metodo 'index'

Route::get('/login', [HomeController::class, 'login'])->name('home.login');
//va al controlador HomeController y ejecuta la accion 'login'

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::POST('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
Route::delete('/servicios/{servicio}', [ServiciosController::class,'destroy'])->name('servicios.destroy');
Route::get('/servicios/{servicio}/edit', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::put('/servicios/{servicio}',[ServiciosController::class,'update'])->name('servicios.update');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::post('/agenda/mostrar', [App\Http\Controllers\EventosController::class, 'show']);
Route::post('/agenda/agregar', [App\Http\Controllers\EventosController::class, 'store']);
Route::post('/agenda/editar/{id}', [App\Http\Controllers\EventosController::class, 'edit']);
Route::post('/agenda/borrar/{id}', [App\Http\Controllers\EventosController::class, 'destroy']);
Route::post('/agenda/actualizar/{evento}', [App\Http\Controllers\EventosController::class, 'update']);

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::POST('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{cliente}', [ClientesController::class,'destroy'])->name('clientes.destroy');
Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}',[ClientesController::class,'update'])->name('clientes.update');

Route::get('/cita', [CitasController::class, 'index'])->name('cita.index');
Route::POST('/cita', [CitasController::class, 'store'])->name('cita.store');
Route::delete('/cita/{cita}', [CitasController::class,'destroy'])->name('cita.destroy');
Route::get('/cita/{cita}/edit', [CitasController::class, 'edit'])->name('cita.edit');
Route::put('/cita/{cita}',[CitasController::class,'update'])->name('cita.update');

Route::POST('/usuarios/login', [UsuariosController::class, 'login'])->name('usuarios.login');
Route::get('/usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');

Route::get('/boleta_cita', [BoletaCitaController::class, 'index'])->name('boleta_cita.index');
Route::POST('/boleta_cita', [BoletaCitaController::class, 'store'])->name('boleta_cita.store');
Route::delete('/boleta_cita/{boleta_cita}', [BoletaCitaController::class,'destroy'])->name('boleta_cita.destroy');
Route::get('/boleta_cita/{boleta_cita}/edit', [BoletaCitaController::class, 'edit'])->name('boleta_cita.edit');
Route::put('/boleta_cita/{boleta_cita}',[BoletaCitaController::class,'update'])->name('boleta_cita.update');


//RUTAS DE TEST
 Route::get('/test', [TestController::class, 'index'])->name('test.index');
// Route::post('/test/mostrar', [App\Http\Controllers\EventosController::class, 'show']);
// Route::post('/test/agregar', [App\Http\Controllers\EventosController::class, 'store']);
// Route::post('/test/editar/{id}', [App\Http\Controllers\EventosController::class, 'edit']);
// Route::post('/test/borrar/{id}', [App\Http\Controllers\EventosController::class, 'destroy']);
// Route::post('/test/actualizar/{evento}', [App\Http\Controllers\EventosController::class, 'update']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


