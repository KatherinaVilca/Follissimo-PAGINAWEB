<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetallePedido;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;

class DetallePedidoController extends Controller
{
/** Muentra todos los detalles de pedidos para cierto id
 * @param  int  $id
 * @return \Illuminate\Http\Response 
 * @OA\Get(
 *     path="/detallepedido",
 *     operationId="detallePedidoIndex",
 *     tags={"Detalle de Pedidos"},
 *     summary="Obtener todos los detalles de pedidos",
 *     description="Obtiene la lista de todos los detalles de pedidos.",
 *      @OA\Parameter(
 *         description="Parámetro necesario para la consulta de detalles de pedidos para un producto",
 *         name="id",
 *         in="path",
 *         description="ID del detalle de pedido",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Lista de detalles de pedidos",
 *     )
 * )
 */
    public function index($id)
    {
        $detalles_pedido = DetallePedido::where('id_pedido', $id)
            ->get();

        return response()->json(compact('detalles_pedido', 'id'), 200);

    }

/**
 * Muentra el detalle de pedido para cierto ID
 * @param  int  $id
 * @return \Illuminate\Http\Response
 * @OA\Get(
 *     path="/detallepedido/{id}",
 *     operationId="detallePedidoShow",
 *     tags={"Detalle de Pedidos"},
 *     summary="Obtener un detalle de pedido",
 *     description="Obtiene la información de un detalle de pedido en base a su ID.",
 *     @OA\Parameter(
 *         description="Parámetro necesario para la consulta de detalle de pedido para un producto",
 *         name="id",
 *         in="path",
 *         description="ID del detalle de pedido",
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
    public function show($id){

        $detalle = DetallePedido::find($id);
      
        if (!$detalle) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['data' => $detalle], 200);
    }
}
