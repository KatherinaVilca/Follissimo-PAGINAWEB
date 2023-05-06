<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index($id_cliente){

        $pedidos = Pedido::find($id_cliente);
        return response()->json(['data'=>$pedidos]);
    }

}
