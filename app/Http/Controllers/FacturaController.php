<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::all();

        return view('vista_factura_index', compact('facturas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vista_factura_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required','min:1', 'max:6'],
            'disco_id' => ['required','min:1', 'max:6']
        ]);
        
        
        $factura = new Factura();
        //aceder a atributos:
        
        $factura->user_id = $request->user_id;
        $factura->disco_id = $request->disco_id;
        
    
        $factura->save();
        return redirect()->route('Factura.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $Factura)
    {
        $factura = $Factura;
        return view('vista_factura_show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $Factura)
    {
        $factura = $Factura;
        return view('vista_factura_edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $Factura)
    {
        $request->validate([
            'user_id' => ['required','min:1', 'max:6'],
            'disco_id' => ['required','min:1', 'max:6']
        ]);

        $factura = $Factura;
        $factura->user_id = $request->user_id;
        $factura->disco_id = $request->disco_id;
        $factura->save();
        return redirect()->route('Factura.show', $factura);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $Factura)
    {
        $factura = $Factura;
        $factura->delete();
        return redirect()->route('Factura.index');
    }
}
