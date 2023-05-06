<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetallePedido;

class DetallePedidoController extends Controller
{
    public function show($id){

        $detalle = DetallePedido::find($id);
      
        if (!$detalle) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['data' => $detalle], 200);
    }
}
