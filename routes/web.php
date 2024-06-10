<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;

Route::get('/', function () {
    return view('welcome');
});


Route::get('alumnos/inicio',[alumnoController::class, 'inicio']);
Route::get('alumnos/requisitos',[alumnoController::class, 'requisitos']);
Route::get('alumnos/listado',[alumnoController::class, 'listado']);
/*CON LA SIGUIENTE LINEA REEMPLAZAMOS TODO LO ANTERIOR*/
route::resource('alumnos',AlumnoController::class);
Route::get('/alumnos/{id}/show', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('/alumnos/{id}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
