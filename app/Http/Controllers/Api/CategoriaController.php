<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;

class CategoriaController extends Controller
{
/** Muentra todas las categorias
 * @return \Illuminate\Http\Response 
 * @OA\Get(
 *     path="/api/categorias",
 *     operationId="getCategoriasList",
 *     tags={"Categorias"},
 *     summary="Obtener lista de categorías",
 *     description="Obtiene la lista de todas las categorias",
 *     @OA\Response(
 *         response=200,
 *         description="Operación exitosa",
 *     ),
 * )
 */  
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json(['data' => $categorias],200);
    }

}
