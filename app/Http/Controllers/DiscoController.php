<?php

namespace App\Http\Controllers;

use App\Models\Disco;
use Illuminate\Http\Request;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discos = Disco::all();
        return view('disco_vista_index', compact('discos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('disco_vista_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'genero' => 'required',
            'artista' => 'required|max:100',
            'year' => 'required',
            'precio' => 'required'
        ]);

        $disco = new Disco();
        //Accedemos a los atributos del modelo Disco
        $disco->nombre = $request->nombre;
        $disco->genero = $request->genero;
        $disco->artista = $request->artista;
        $disco->year = $request->year;
        $disco->precio = $request->precio;

        //Hacemos la inserción en la base de datos, el INSERT INTO
        $disco->save();
        
        //Nos regresamos al index = Disco.index
        return redirect()->route('disco.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disco $disco)
    {
        $disco = $disco; 
        return view('disco_vista_show', compact('disco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disco $disco)
    {
        $disco = $disco;
        return  view('disco_vista_edit', compact('disco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disco $disco)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'genero' => 'required',
            'artista' => 'required|max:100',
            'year' => 'required',
            'precio' => 'required'
        ]);

        $disco = $disco;

        $disco->nombre = $request->nombre;
        $disco->genero = $request->genero;
        $disco->artista = $request->artista;
        $disco->year = $request->year;
        $disco->precio = $request->precio;

        //Igual se deben validar los datos
        $disco->save();
        return redirect()->route('disco.show', $disco);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disco $disco)
    {
        $disco = $disco;
        $disco->delete();
        return redirect()->route('disco.index');
    }
}
