<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\EstadoPedido;
use App\Models\Cliente;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Post;
use OpenApi\Annotations\RequestBody;
use OpenApi\Annotations\MediaType;
use OpenApi\Annotations\Schema;
use OpenApi\Annotations\Property;

use App\Http\Requests\CompraRequest;

class CompraController extends Controller
{
 /**
 * Realizar una compra.
 * @OA\Post(
 *     path="/rest/compra",
 *     operationId="store",
 *     tags={"Compra"},
 *     summary="Crear una nueva compra",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 type="object",
 *                 required={"email", "monto_total", "id_producto", "cantidad", "monto_subtotal"},
 *                 @OA\Property(property="email", type="string"),
 *                 @OA\Property(property="monto_total", type="integer"),
 *                 @OA\Property(property="id_producto", type="integer"),
 *                 @OA\Property(property="cantidad", type="integer"),
 *                 @OA\Property(property="monto_subtotal", type="integer"),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Operación exitosa",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Solicitud inválida",
 *     )
 * )
 */
    public function store( CompraRequest $request) {

        $validatedRequest = $request->validated();

        $pedido= new Pedido();

        $cliente = Cliente::where('email',  $validatedRequest['email'])->first();

        if (!$cliente) {
            $cliente = new Cliente();
            $cliente->nombre = Str::random(10);
            $cliente->apellido = Str::random(10);
            $cliente->direccion = Str::random(20);
            $cliente->email = $validatedRequest['email'];
            $cliente->save();
        }

        $estadoPendiente = EstadoPedido::where('estado', 'PENDIENTE')->first();

        $pedido->monto_total = $validatedRequest['monto_total'];
        $pedido->id_cliente = $cliente->id;
        $pedido->id_estado = $estadoPendiente->id;
        $pedido->save();

        foreach ($validatedRequest['detalle_productos'] as $detalle_producto) {

            $detallePedido = new DetallePedido();
            $detallePedido->id_pedido = $pedido->id;
            $detallePedido->id_producto = $detalle_producto['id_producto'];
            $detallePedido->cantidad = $detalle_producto['cantidad'];
            $detallePedido->monto_subtotal = $detalle_producto['monto_subtotal'];
            $detallePedido->save();
        }

        return response()->json([
            'message' => 'Compra realizada con éxito',
        ], 200);
    }

}
