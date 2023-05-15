<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;
use App\Http\Resources\ProductoResource;

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
 *     path="/api/productos",
 *     operationId="getProductosList",
 *     tags={"Productos"},
 *     summary="Obtener lista de productos",
 *     description="Obtiene la lista de todos los productos.",
 *     @OA\Response(
 *         response=200,
 *         description="Operación exitosa"
 *     ),
 * 
 *     @OA\Response(
 *         response=404,
 *         description="Productos no encontrados"
 *     )
 * )
 */
     public function index(){
        $productos = Producto::all();

        if ($productos->count() > 0) {
            return response()->json(ProductoResource::collection($productos), 200);
        } else {
            return response()->json(['message' => 'No se encontraron productos'], 404);
        }
    }

/**
 * Muentra un producto dado su id
 * @param  int  $id
 * @return \Illuminate\Http\Response
 * @OA\Get(
 *     path="/api/productos/{id}/show",
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
        } else {
            return response()->json(new ProductoResource($producto), 200);
        }
    }
}
