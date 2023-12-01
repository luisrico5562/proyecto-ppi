<?php

namespace App\Http\Controllers;

use App\Mail\NotificaAddCarrito;
use App\Models\Carrito;
use App\Models\Disco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarritoController extends Controller
{

    public function createCarrito()
    {
        $usuario = auth()->user();

        if(!$usuario->carrito)
        {
            $carrito = new Carrito();
            $carrito->user_id = $usuario->id;
            $carrito->save();
            return $carrito;
        }
        return $usuario->carrito;
    }

    public function agregarDiscoAlCarrito(Request $request, Disco $disco)
    {
        //Obtenemos el usuario logueado
        $usuario = auth()->user();
        $carrito = $this->createCarrito();

        $usuario->carrito = $carrito;

        if($carrito->discos() == null)
        {
            $cantidad = $request->cantidad;
            $carrito->discos()->attach($disco, ['cantidad' => $cantidad]);
            Mail::to($request->user())->send(new NotificaAddCarrito($disco));
            return redirect()->route('carrito.index')->with('success', 'El disco ha sido agregado al carrito.');
        }
        if($usuario->carrito && ($carrito->discos() != null) && !$usuario->carrito->discos->contains($disco->id))
        {
            $cantidad = $request->cantidad;
            $carrito->discos()->attach($disco, ['cantidad' => $cantidad]);
            Mail::to($request->user())->send(new NotificaAddCarrito($disco));
            return redirect()->route('carrito.index')->with('success', 'El disco ha sido agregado al carrito.');
        }
        else
        {
            return redirect()->route('carrito.index')->with('info', 'El disco ya está en el carrito.');
        }
        #return redirect()->route('carrito.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); //$user && $user->carrito->exists()

        if(optional($user->carrito)->exists())
        {
            $carrito = $user->carrito;
            $discosCarrito = $carrito->discos()->withPivot('cantidad')->get();
            $cantDiscos = $discosCarrito->count();
        }
        else
        {
            $discosCarrito = [];
            $cantDiscos = 0;
        }
        return view('carrito_vista_index', compact('discosCarrito','cantDiscos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = auth()->user();

        if(!$usuario->carrito)
        {
            $carrito = new Carrito();
            $carrito->user_id = $usuario->id;
            $carrito->save();
            return redirect()->route('carrito.index');
        }
        return redirect()->route('carrito.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    public function eliminar(Disco $disco)
    {
        $usuario = auth()->user();

        if ($usuario->carrito)
        {
            $carrito = $usuario->carrito;

            // Utiliza detach para eliminar el disco de la tabla pivote
            $carrito->discos()->detach($disco);

            return redirect()->route('carrito.index')->with('success', 'El disco ha sido eliminado del carrito.');
        }
        return redirect()->route('carrito.index')->with('info', 'El carrito no existe.');
    }
}
