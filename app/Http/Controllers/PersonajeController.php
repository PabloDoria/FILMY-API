<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaje;
use Illuminate\Http\JsonResponse;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Personaje::all();
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
        $personaje = new Personaje;
        $personaje->nombre = $request -> input('nombre');
        $personaje->pelicula_id = $request -> input('pelicula_id');
        $personaje->descripcion = $request -> input('descripcion');
        $personaje->imagen = $request -> input('imagen');
        $personaje->save();

        return response()->json($personaje, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Personaje::findOrFail($id);   
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
        $personaje = Personaje::findOrFail($id);
        
        // Actualiza solo los campos proporcionados en la solicitud
        if ($request->filled('nombre')) {
            $personaje->nombre = $request->input('nombre');
        }
    
        if ($request->filled('pelicula_id')) {
            $personaje->pelicula_id = $request->input('pelicula_id');
        }
    
        if ($request->filled('descripcion')) {
            $personaje->descripcion = $request->input('descripcion');
        }

        if ($request->filled('imagen')) {
            $personaje->imagen = $request->input('imagen');
        }
    
        // Guarda los cambios en la base de datos
        $personaje->save();
        
        // Devuelve una respuesta adecuada
        return response()->json($personaje, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $personaje = Personaje::findOrFail($id);
        $personaje->delete();
    }
}
