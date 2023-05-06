<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Tamaño;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $tamaños = Tamaño::all();
        return view('producto.create', compact('categorias'), compact('tamaños'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validated();

        $producto = new Producto();

        $producto->nombre = $validateData->get('Nombre');
        $producto->precio = $validateData->get('Precio');
        $producto->color = $validateData->get('Color');
        $producto->tipo_categoria = $validateData->get('Categoria');
        $producto->tipo_tamaño = $validateData->get('Tamaño');
        $producto->descripción = $validateData->get('Descripcion');

        $producto->save();
        return redirect('/productos')
            ->with('success', 'Producto creado existosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $id)
    {
        $producto = Producto::find($id);
        return view('producto.showProduct', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $tamaños = Tamaño::all();
        return view('producto.edit', compact('categorias'), compact('tamaños'))->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $validateData = $request->validated();

        $producto->nombre = $validateData->get('Nombre');
        $producto->precio = $validateData->get('Precio');
        $producto->color = $validateData->get('Color');
        $producto->tipo_categoria = $validateData->get('Categoria');
        $producto->tipo_tamaño = $validateData->get('Tamaño');
        $producto->descripción = $validateData->get('Descripcion');

        $producto->update();

        return redirect('/productos')
            ->with('success', 'Producto editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/productos')
            ->with('success', 'Producto eliminado exitosamente');
    }

   
}

