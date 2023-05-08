<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;

/**
 * @OA\Info(
 *     title="Folissimo API",
 *     version="1.0.0",
 *     description="Descripción de la API"
 * )
 */

class ProductoController extends Controller
{
/** Muentra todos los productos
 * @return \Illuminate\Http\Response 
 * @OA\Get(
 *     path="/productos",
 *     operationId="getProductosList",
 *     tags={"Productos"},
 *     summary="Obtener lista de productos",
 *     description="Obtiene la lista de todos los productos.",
 *     @OA\Response(
 *         response=200,
 *         description="Operación exitosa"
 *     )
 * )
 */
    public function index(){

        $productos = Producto::all();
        return response()->json(['data' => $productos],200);
    }

/**
 * Muentra un producto dado su id
 * @param  int  $id
 * @return \Illuminate\Http\Response
 * @OA\Get(
 *     path="/producto/{id}",
 *     operationId="productoShow",
 *     tags={"Producto"},
 *     summary="Obtener información de un producto",
 *     description="Obtiene la información de un producto en base a su ID.",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID del producto",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Información del producto",
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Producto no encontrado"
 *     )
 * )
 */
 
    public function show($id){

        $producto = Producto::find($id);
      
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['data' => $producto], 200);
    }
}
