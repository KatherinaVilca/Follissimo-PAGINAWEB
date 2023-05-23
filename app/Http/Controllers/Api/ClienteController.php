<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use OpenApi\Annotations\Get;
use OpenApi\Annotations\Response;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;

class ClienteController extends Controller
{
 /**
 * @OA\Post(
 *     path="/api/clientes/create",
 *     summary="Crear un nuevo cliente",
 *     tags={"Cliente"},
 *     @OA\Response(
 *         response=200,
 *         description="Campos necesarios para crear un nuevo cliente",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="fields",
 *                 type="object",
 *                 @OA\Property(
 *                     property="email",
 *                     type="object",
 *                     @OA\Property(
 *                         property="type",
 *                         type="string",
 *                         example="email"
 *                     ),
 *                     @OA\Property(
 *                         property="label",
 *                         type="string",
 *                         example="Email"
 *                     ),
 *                     @OA\Property(
 *                         property="required",
 *                         type="boolean",
 *                         example=true
 *                     )
 *                 )
 *             )
 *         )
 *     )
 * )
 */
    public function create()
    {
        $datos_cliente = [
            'email' => [
                'type' => 'email',
                'label' => 'Email',
                'required' => true
            ],
        ];

        return response()->json(['fields' => $datos_cliente]);
    }

/**
 * @OA\Post(
 *     path="/api/clientes",
 *     summary="Crear un nuevo cliente",
 *     tags={"Clientes"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="email",
 *                 type="string",
 *                 format="email",
 *                 description="Correo electrónico del nuevo cliente"
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cliente creado exitosamente",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data"
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Error de validación",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="Los datos proporcionados no son válidos."
 *             ),
 *             @OA\Property(
 *                 property="errors",
 *                 type="object",
 *                 description="Errores de validación al crear un cliente.",
 *                 @OA\Property(
 *                     property="email",
 *                     type="array",
 *                     description="Error de validación del campo email.",
 *                     @OA\Items(
 *                         type="string",
 *                         example="El campo email es requerido."
 *                     )
 *                 )
 *             )
 *         )
 *     )
 * )
 */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:clients,email'
        ]);

        $cliente = new Cliente();
        $cliente->email = $validatedData['email'];
        $cliente->save();

        return new ClienteResource($cliente);
    }


}
