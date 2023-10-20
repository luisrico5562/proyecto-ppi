<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Artista::all();
        $artistas = Artista::all();

        //return view('vista_artista_index');
        //return view('artistas/artista-index', ['artistas' => $artistas]);
        //['normas' => $normas]

        return view('vista_artista_index', compact('artistas'));
        //return view('vista_artista_create', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('vista_artista_index');
        return view('vista_artista_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required:artistas,nombre', 'max:50'],
            'pais' => ['min:1', 'max:30'],
            'descripcion' => ['min:0', 'max:300']
            // LLENARLLENARLLENARLLENARLLENARLLENARLLENAR 
            // FOTO EN EL TELÉFONO DE SAMU
        ]);
        
        
        $artista = new Artista();
        //aceder a atributos:
        
        //$cliente->id = $request->id;
        $artista->nombre = $request->nombre;
        $artista->pais = $request->pais;
        $artista->descripcion = $request->descripcion;
        
    
        //hacer la insersion a la base de datos
        $artista->save();
        //return redirect()->back();
        //return redirect('/Arista');
        return redirect()->route('artista.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artista $artistum)
    {
        $artista = $artistum;
        return view('vista_artista_show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artista $artistum)
    {
        $artista = $artistum;
        return view('vista_artista_edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artista $artistum)
    {
        $request->validate([
            'nombre' => ['required:artistas,nombre', 'max:50'],
            'pais' => ['min:1', 'max:30'],
            'descripcion' => ['min:0', 'max:300']
            // LLENARLLENARLLENARLLENARLLENARLLENARLLENAR 
            // FOTO EN EL TELÉFONO DE SAMU
        ]);

        $artista = $artistum;
        $artista->nombre = $request->nombre;
        $artista->pais = $request->pais;
        $artista->descripcion = $request->descripcion;
        $artista->save();
        return redirect()->route('artista.show', $artista);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artista $artistum)
    {
        $artista = $artistum;
        $artista->delete();
        return redirect()->route('artista.index');
    }
}