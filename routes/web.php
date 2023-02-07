<?php
/**
 * Este archivo contiene las rutas que llaman a las funciones del controlador NuevoControlador.
 * @author Reyes Bellido Samaniego
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NuevoControlador;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [NuevoControlador::class, 'index']);//Ruta que llama a la función index().
Route::get('buscador', [NuevoControlador::class, 'buscar']);//Ruta que llama a la función buscar().
Route::post('libros/consultar', [NuevoControlador::class, 'consultar_libros']);//Ruta que llama a la función consultar_libros().
Route::post('autores/consultar', [NuevoControlador::class, 'consultar_autores']);//Ruta que llama a la función consultar_autores().
