<?php

namespace App\Http\Controllers;

use App\Models\Tamanio;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class TamanioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamaños = tamaños::all();
        return view('tamañoView.tamaños', compact('tamaños'));
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
        $this->validate($request, [
            'nameTamaño'=>'required',
        ])

        return redirect()->route('tamanio.index')
            ->with('success', 'Nuevo tamaño creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tamanio $tamanio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tamanio $tamanio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tamanio $tamanio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tamanio $tamanio)
    {
        //
    }
}
