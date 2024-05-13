<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Http\JsonResponse;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pelicula::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pelicula = new Pelicula;
        $pelicula->nombre = $request -> input('nombre');
        $pelicula->calificacion = $request -> input('calificacion');
        $pelicula->fecha_lanzamiento = $request -> input('fecha_lanzamiento');
        $pelicula->secuela = $request -> input('secuela');
        $pelicula->save();

        return response()->json($pelicula, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {        
        return Pelicula::findOrFail($id);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        // Encuentra la nota que deseas actualizar
        $pelicula = Pelicula::findOrFail($id);
        
        // Actualiza solo los campos proporcionados en la solicitud
        if ($request->filled('nombre')) {
            $pelicula->nombre = $request->input('nombre');
        }
    
        if ($request->filled('calificacion')) {
            $pelicula->calificacion = $request->input('calificacion');
        }
    
        if ($request->filled('fecha_lanzamiento')) {
            $pelicula->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        }

        if ($request->filled('secuela')) {
            $pelicula->secuela = $request->input('secuela');
        }
    
        // Guarda los cambios en la base de datos
        $pelicula->save();
        
        // Devuelve una respuesta adecuada
        return response()->json($pelicula, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
    }
}
