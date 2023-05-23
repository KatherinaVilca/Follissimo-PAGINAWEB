<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;
use App\Models\Pedido;
use App\Http\Resources\PedidoResource;

class PedidoController extends Controller
{
    public function index()
    {

    }

/** Muestra todos los pedidos para un id de cliente
 * @param  int  $id_cliente
 * @return \Illuminate\Http\Response
 * @OA\Get(
 *     path="/rest/pedidos/{id_cliente}",
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
 *     ),
 *
 *     @OA\Response(
 *         response=404,
 *         description="No se encontraron pedidos del cliente"
 *     )
 * )
 */
    public function index_id($id_cliente){

        $pedidos = Pedido::where('id_cliente', $id_cliente)->get();

        if (!$pedidos) {
            return response()->json(['message' => 'Pedidos no encontrados'], 404);
        } else {
            return response()->json(PedidoResource::collection($pedidos), 200);
        }
    }

/** Dado un producto dado, lo cancela
 * @param  int  $id
 * @return \Illuminate\Http\Response
 * @OA\Delete(
 *     path="/rest/pedido/{id}{id_estado}",
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
    public function cancelar($id,$id_estado){

        $pedido = Pedido::find($id);
        $pedido->id_estado = $id_estado;

        return response()->json(PedidoResource($pedido), 200);
    }

}
