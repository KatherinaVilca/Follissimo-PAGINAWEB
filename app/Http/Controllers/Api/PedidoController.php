<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {

    }

/** Muentra todos los pedidos para un id de cliente
 * @param  int  $id_cliente
 * @return \Illuminate\Http\Response 
 * @OA\Get(
 *     path="/pedidos/{id_cliente}/index_id",
 *     operationId="pedidoIndexID",
 *     tags={"Pedido"},
 *     summary="Obtener pedidos de un cliente",
 *     description="Obtiene la lista de pedidos asociados a un cliente en base a su ID.",
 *     @OA\Parameter(
 *         name="id_cliente",
 *         in="path",
 *         description="ID del cliente",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Lista de pedidos del cliente",
 *     )
 * )
 */
    public function index_id($id_cliente){

        $pedidos = Pedido::where('id_cliente', $id_cliente)->get();
        
        return response()->json(['data'=>$pedidos]);
    }

/** Dado un producto dado, lo cancela
 * @param  int  $id
 * @return \Illuminate\Http\Response 
 * @OA\Delete(
 *     path="/pedido/{id}",
 *     operationId="pedidoCancelar",
 *     tags={"Pedido"},
 *     summary="Cancelar un pedido",
 *     description="Cancela un pedido en base a su ID.",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID del pedido",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Pedido cancelado exitosamente",
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Pedido no encontrado"
 *     )
 * )
 */
    public function cancelar($id){

        $pedido = Pedido::find($id);
        $pedido->delete();

        return response()->json(['data' => $pedido]);
    }

}
