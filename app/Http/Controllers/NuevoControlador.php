<?php
/**
 * Este archivo es el controlador que contiene las funciones llamadas en las rutas.
 * @author Reyes Bellido Samaniego 
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NuevoControlador extends Controller
{
    /**
 * Función que almacena los libros y sus autores en un array
 * @return array retorna los autores almacenados en $biblioteca.
 */
    public function index()
    {
        $biblioteca = DB::select("SELECT a.id as id_libro, 
        a.titulo, a.f_publicacion, a.id_autor, b.id, b.nombre, b.apellidos, b.nacionalidad  FROM Libro a JOIN Autor b ON (a.id_autor=b.id)");
        return view('biblioteca', ['libros' => $biblioteca]);
    }
/**
 * Función que llama a la vista buscador
 * @return view retorna la vista buscador
 */
    public function buscar()
    {
        return view('buscador');
    }
/**
 * Función que almacena los libros en un array de formato json.
 * @param Request $request
 * @return array retorna los libros en array $libros.
 */
    public function consultar_libros(Request $request)
    {
        $valor = $request->q;
        $libros = DB::select("select * from libro where titulo like '%$valor%'");
        return response()->json($libros, 200);
    }
/**
 * Función que almacena los autores en un array de formato json.
 * @param Request $request
 * @return array retorna los autores en array $autores.
 */
    public function consultar_autores(Request $request)
    {
        $valor = $request->q;
        $autores = DB::select("select * from autor where nombre  like '%$valor%' or apellidos like '%$valor%'");
        return response()->json($autores, 200);
    }
}
