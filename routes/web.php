<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/habitacion', [App\Http\Controllers\RoomController::class, 'habitaciones'])->name('habitacion');
Route::get('/mostrarImagenHabitaciones/{nombre}', [App\Http\Controllers\RoomController::class, 'mostrarImagenHabitaciones'])->name('mostrarImagenHabitaciones');
Route::get('/reserva/{id}', [App\Http\Controllers\BookingController::class, 'crearReserva'])->name('reserva');
Route::post('/registrarReserva', [App\Http\Controllers\BookingController::class, 'registrarReserva'])->name('registrarReserva');
Route::delete('/eliminarReserva/{id}', [App\Http\Controllers\BookingController::class, 'eliminarReserva'])->name('eliminarReserva'); 
Route::get('/editarReserva/{id}/editarReserva', [App\Http\Controllers\BookingController::class, 'editarReserva'])->name('editarReserva');
Route::put('/guardarEditarReserva/{id}', [App\Http\Controllers\BookingController::class, 'guardarEditarReserva'])->name('guardarEditarReserva'); 
Route::get('/nosotros', [App\Http\Controllers\BookingController::class, 'snosotros'])->name('nosotros');
Route::get('/huesped', [App\Http\Controllers\CustomerController::class, 'huespedes'])->name('huesped');
Route::post('/registrarHuesped', [App\Http\Controllers\CustomerController::class, 'registrarHuesped'])->name('registrarHuesped');
Route::get('/crudHuesped', [App\Http\Controllers\CustomerController::class, 'crudHuesped'])->name('crudHuesped'); 
Route::delete('/eliminarHuesped/{id}', [App\Http\Controllers\CustomerController::class, 'eliminarHuesped'])->name('eliminarHuesped'); 
Route::get('/editarHuesped/{id}/editarHuesped', [App\Http\Controllers\CustomerController::class, 'editarHuesped'])->name('editarHuesped');
Route::put('/guardarEditarHuesped/{id}', [App\Http\Controllers\CustomerController::class, 'guardarEditarHuesped'])->name('guardarEditarHuesped'); 
Route::get('/crudReserva', [App\Http\Controllers\BookingController::class, 'crudReserva'])->name('crudReserva');
Route::post('/reservaProceso', [App\Http\Controllers\BookingController::class, 'reservaProceso'])->name('reservaProceso');

