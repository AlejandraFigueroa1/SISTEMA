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


Route::get('alumnos', function () {
    return view('estudiante.create');
});

//Auth::routes();

Route::resource('estudiante', App\Http\Controllers\EstudianteController::class);
Route::resource('materia', App\Http\Controllers\MateriumController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
