<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

            //pero el request solo viene un mail. Si cliente es nulo, deberia abrir un formulario 
            // donde se pidan y me manden estos datos. Luego deberia volver aca con
            //otro resquest y a ese pedirle estas cosas.
            /*
            $cliente->nombre = $validateData['nombre'];
            $cliente->apellido = $validateData['apellido'];
            $cliente->direccion = $validateData['direccion'];
            $cliente->email = $validateData['email'];
            $cliente->save();
            */
            $cliente->email = $validateData['email'];
        }
        
        $pedido->monto_total = $validateData['monto_total'];
        $pedido->id_cliente = $cliente->id;
        $pedido->estado= 'pendiente';
        $pedido->save();
      
        $detallePedido->id_pedido = $pedido->id;}
        $detallePedido->id_producto = $validateData['id_producto'];
        $detallePedido->cantidad = $validateData['cantidad'];
        $detallePedido->monto_subtotal = $validateData['monto_subtotal'];


    }


}
