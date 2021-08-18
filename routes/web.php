<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\Curso2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//clase1

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la pagina principal";
// });

// Route::get('cursos', function () {
//     // return view('welcome');
//     return "Bienvenido a la pagina cursos";
// });

// Route::get('cursos/{curso}', function ($curso) {
//     // return view('welcome');
//     return "Bienvenido a la pagina ".$curso;
// });

// esta ruta se solapa con la otra previa con la misma estructura, cambio el orden
// Route::get('cursos/create', function(){
//     return "En esta pagina podras hacer un curso";
// });

// Route::get('cursos/{curso}', function ($curso) {
//     // return view('welcome');
//     return "Bienvenido a la pagina ".$curso;
// });

// Mas de un parametro con el segundo no obligatorio
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria=null) {
//     return "Bienvenido a la pagina ".$curso." categoria: ".$categoria;
// });

// clase2


// en el formato de laravel 7 seria asi:
// Route::get('/cursos', 'CursoController@index');
// para que esto funcione en el archivo app\Providers\RouteServiceProvider.php
// tiene que estar declarado el namespace controllers:
// protected $namespace = 'App\\Http\\Controllers';

// defino las rutas para que llamen un determinado controlador, la sintaxis nueva permite redirigir al conrolador
// manteniendo presionado el ctrl
Route::get('/', HomeController::class);
// asi por defecto busca el metodo __invoke()
// Route::get('cursos', CursoController::class); 
// asi le digo que busque el metodo index
Route::get('/cursos', [CursoController::class, 'index']); 
// asi le digo que busque el metodo index
Route::get('/cursos/create', [CursoController::class, 'create']); 
// asi le digo que busque el metodo show el cual espera un parametro
Route::get('/cursos/{curso}', [CursoController::class, 'show']); 


// cursos2

Route::get('/cursos2', [Curso2Controller::class, 'index']); 
Route::get('/cursos2/create', [Curso2Controller::class, 'create']); 
Route::get('/cursos2/{curso}', [Curso2Controller::class, 'show']); 
