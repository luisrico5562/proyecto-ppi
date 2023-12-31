<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Disco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $artistas = Artista::all();
        return view('disco_vista_create', compact('artistas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artista_id' => 'required', 'exists:artistas, id',
            'nombre' => 'required|max:50',
            'genero' => 'required',
            'year' => 'required',
            'precio' => 'required',
            'archivo' => 'max:10000'
        ]);

        $disco = new Disco();
        //Accedemos a los atributos del modelo Disco
        $disco->nombre = $request->nombre;
        $disco->genero = $request->genero;
        $disco->artista_id = $request->artista_id;
        $disco->year = $request->year;
        $disco->precio = $request->precio;
        $disco->archivo_ubicacion = $request->file('archivo')->store('public/img');
        $disco->archivo_nombre = $request->file('archivo')->getClientOriginalName();

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
    public function edit(Disco $disco, Request $request)
    {
        $disco = $disco;
        if($request->user()->cannot('delete', $disco))
        {
            abort(403);
        }
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
    public function destroy(Disco $disco, Request $request)
    {
        #$idUser = $request->user->id;
        $disco = $disco;

        if($request->user()->cannot('delete', $disco))
        {
            abort(403);
        }

        $disco->delete();
        return redirect()->route('disco.index')->with('success', 'El disco ha sido eliminado exitosamente.');
    }

    public function descargar(Disco $disco)
    {
        return Storage::download($disco->archivo_ubicacion, $disco->archivo_nombre);
    }
}
