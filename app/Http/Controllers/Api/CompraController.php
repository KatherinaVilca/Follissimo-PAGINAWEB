<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Cliente;
use App\Http\Requests\CompraRequest;


class CompraController extends Controller
{   
    public function store(ProductoRequest $request) {

        $validateData = $request->validated();

        $pedido= new Pedido();
        $detallePedido = new DetallePedido ();
    
        $cliente = Cliente::where('email',  $validateData['email'])->first();

        if (!$cliente) {
            $cliente = new Cliente();
            $cliente->nombre = Str::random(10);
            $cliente->apellido = Str::random(10);
            $cliente->direccion = Str::random(20);
            $cliente->email = $validateData['email'];
            $cliente->save();
        }
        
        $estadoPendiente = EstadoPedido::where('estado', 'PENDIENTE')->first();

        $pedido->monto_total = $validateData['monto_total'];
        $pedido->id_cliente = $cliente->id;
        $pedido->id_estado = $estadoPendiente->id;
        $pedido->save();
      
        $detallePedido->id_pedido = $pedido->id;
        $detallePedido->id_producto = $validateData['id_producto'];
        $detallePedido->cantidad = $validateData['cantidad'];
        $detallePedido->monto_subtotal = $validateData['monto_subtotal'];
    }

}
