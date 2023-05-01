<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $allProductos = productos::all();
        return view('productView.products', compact('allProductos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = categorias::all();
        $tamaños = tamaños::all();
        return view('productView.productCreate', compact('categorias'), compact('tamaños'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nameProduct'=> 'bail|required',
            'priceProduct' => 'required|min:0',
            'colorProduct' =>'required',
            'categoriaProduct'=>'required|exists:categorias',
            'tamañoProduct'=>'required|exists:tamaño',
            'descriptionProduct' => 'required|max:255',
        ])

        return redirect()->route('product.index')
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
