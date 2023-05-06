<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::all();
        return response()->json(['data' => $productos]);
    }

    public function show($id){

        $producto = Producto::find($id);
      
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['data' => $producto], 200);
    }
}
