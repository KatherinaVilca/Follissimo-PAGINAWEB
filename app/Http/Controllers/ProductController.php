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
        $producto = new Product();

        $producto->nombre = $request->get('Nombre');
        $producto->precio = $request->get('Precio');
        $producto->color = $request->get('Color');
        $producto->tipo_categoria = $request->get('Categoria');
        $producto->tipo_tamaño = $request->get('Tamaño');
        $producto->descripción = $request->get('Descripcion');

        $producto->save();
        return redirect('/productos')
            ->with('success', 'Producto creado existosamente');
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
    public function edit($id)
    {
        $producto = Product::find($id);
        $categorias = Categoria::all();
        $tamaños = Tamaño::all();
        return view('ProductView.edit', compact('categorias'), compact('tamaños'))->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Product::find($id);

        $producto->nombre = $request->get('Nombre');
        $producto->precio = $request->get('Precio');
        $producto->color = $request->get('Color');
        $producto->tipo_categoria = $request->get('Categoria');
        $producto->tipo_tamaño = $request->get('Tamaño');
        $producto->descripción = $request->get('Descripcion');

        $this->validate($request, [
            'Nombre'=> 'bail|required',
            'Precio' => 'required|min:0',
            'Color' =>'required',
            'Categoria'=>'required',
            'Tamaño'=>'required',
            'Descripcion' => 'required|max:255',
        ]);

        $producto->update();

        return redirect('/productos')
            ->with('success', 'Producto editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Product::find($id);
        $producto->delete();

        return redirect('/productos')
            ->with('success', 'Producto eliminado exitosamente');
    }
}
