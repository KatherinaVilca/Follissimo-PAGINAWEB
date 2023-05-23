<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetallePedido;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;
use App\Http\Resources\DetallePedidoResource;


class DetallePedidoController extends Controller
{
    public function index()
    {

    }

/**
 * Muestra el detalle de pedido para cierto ID
 * @param  int  $id_pedido
 * @return \Illuminate\Http\Response
 * @OA\Get(
 *     path="/rest/pedidos/{id_pedido}/detalle",
 *     operationId="DetallePedidoShow",
 *     tags={"Detalle de Pedido"},
 *     summary="Obtener un detalle de pedido",
 *     description="Obtiene la información de un detalle de pedido en base a su ID.",
 *     @OA\Parameter(
 *         description="Parámetro necesario para la consulta de detalle de pedido para un producto",
 *         name="id_pedido",
 *         in="path",
 *         description="ID del pedido",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Información del detalle de pedido",
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Detalle de pedido no encontrado"
 *     )
 * )
 */
    public function show($id_pedido){

        $detalle = DetallePedido::where('id_pedido', $id_pedido)->get();

        if (!$detalle) {
            return response()->json(['message' => 'Detalle no encontrado'], 404);
        } else {
            return response()->json(DetallePedidoResource::collection($detalle), 200);
        }
    }
}
