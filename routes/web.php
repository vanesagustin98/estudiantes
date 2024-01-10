<?php

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

//Rutas estudiantes
Route::get('/estudiantes', [App\Http\Controllers\EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/estudiantes/preadicionar', [App\Http\Controllers\EstudianteController::class, 'preadicionar'])->name('estudiante.preadicionar');
Route::post('/estudiantes', [App\Http\Controllers\EstudianteController::class, 'adicionar'])->name('estudiante.adicionar');
Route::patch('/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'editar'])->name('estudiante.editar');
Route::put('/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'actualizar'])->name('estudiante.actualizar');
Route::delete('/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'borrar'])->name('estudiante.borrar');
