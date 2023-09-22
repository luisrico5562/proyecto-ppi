<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vista_cliente_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vista_cliente_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'nombre' => 'required:clientes,nombre|max:255',
            'usuario' => ['unique', 'required', 'min:1', 'max:30'],
            'correo' => 'required|email',
            'password' => ['required', 'min:5'],
            'direccion' => ['required', 'min:5', 'max:50'],
            // LLENARLLENARLLENARLLENARLLENARLLENARLLENAR 
            // FOTO EN EL TELÉFONO DE SAMU
        ]);
        
        
        $cliente = new Cliente();
        //aceder a atributos:
        
        //$cliente->id = $request->id;
        $cliente->nombre = $request->nombre;
        $cliente->usuario = $request->usuario;
        $cliente->correo = $request->correo;
        $cliente->password = $request->password;
        $cliente->direccion = $request->direccion;
        
    
        //hacer la insersion a la base de datos
        $cliente->save();
        //return redirect()->back();
        return redirect('/Cliente');
        */
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
