<?php

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\BancoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpleadoController;


Route::get('/', function () {
    return view('home');
});

Route::get('/Home', [PruebaController::class, 'index'])->name('home');
Route::get('/Mision', [PruebaController::class, 'mision'])->name('vista1');
Route::get('/Vision', [PruebaController::class, 'vision'])->name('vista2');
Route::get('/About_us', [PruebaController::class, 'about_us'])->name('vista3');

Route::get('/calcular', [PruebaController::class, 'mostrar_calculadora'])->name('envia_calculadora');
Route::post('/resultado', [PruebaController::class, 'calcular'])->name('calcular_datos');

Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit'); // Ruta para editar
Route::put('/producto/{id}', [ProductoController::class, 'update'])->name('producto.update'); // Ruta para actualizar
Route::delete('/producto/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy'); // Ruta para eliminar

Route::resource('banco', BancoController::class);

Route::resource('cargo', CargoController::class);

Route::resource('empresa', EmpresaController::class);

Route::resource('empleado', EmpleadoController::class);
