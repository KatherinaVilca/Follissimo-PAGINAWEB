<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use App\Models\Tamaño;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Product::all();
        return view('ProductView.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $tamaños = Tamaño::all();
        return view('productView.productCreate', compact('categorias'), compact('tamaños'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nombre'=> 'bail|required',
            'Precio' => 'required|min:0',
            'Color' =>'required',
            'Categoria'=>'required',
            'Tamaño'=>'required',
            'Descripcion' => 'required|max:255',
        ]);
        $productos = new Product();

        $productos->nombre = $request->get('Nombre');
        $productos->precio = $request->get('Precio');
        $productos->color = $request->get('Color');
        $productos->tipo_categoria = $request->get('Categoria');
        $productos->tipo_tamaño = $request->get('Tamaño');
        $productos->descripción = $request->get('Descripcion');

        $productos->save();
        return redirect('/productos')
            ->with('success', 'Producto nuevo creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::find($id);
        return view('productView.showProduct', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
