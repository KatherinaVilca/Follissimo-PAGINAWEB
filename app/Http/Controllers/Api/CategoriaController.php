<?php
namespace App\Http\Controllers\Api;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Categoria API",
 *     version="1.0.0",
 *     description="Descripción de la API"
 * )
 */


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
   
    /**
 * @OA\Get(
 *     path="/api/categorias",
 *     operationId="getCategoriasList",
 *     tags={"Categorias"},
 *     summary="Obtener lista de categorías",
 *     @OA\Response(
 *         response=200,
 *         description="Operación exitosa",
 *       
 *     ),
 * )
 */
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json(['data' => $categorias]);
    }

}
