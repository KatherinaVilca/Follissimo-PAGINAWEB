<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Requests\RegistroRequest;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class ClienteAuthenticatedSessionController extends Controller
{
    public function registrarUsuario(RegistroRequest $request)
    {
        $validateData = $request->validated();

        /*
        if($validateData->fails()){
            return response()->json($validateData->errors());
        }
        */

        $cliente = new Cliente();
        $cliente->nombre = $validateData['nombre'];
        $cliente->apellido = $validateData['apellido'];
        $cliente->direccion = $validateData['direccion'];
        $cliente->email = $validateData['email'];
        $cliente->password = Hash::make($validateData['password']);
        $cliente->save();

        $token = $cliente->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['cliente' => $cliente, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }

    public function login (Request $request)
    {
        /*
        if(!Auth::attempt($request->only('email','password')))
        {
            return response()
                ->json(['message' => 'No autorizado en el controler'], 401);
            
        }
        

        $cliente = Cliente::where('email', $request['email']) ->first();
        */

        $cliente = Cliente::where('email', $request['email'])->first();

        $token = $cliente->createToken('auth_token')->plainTextToken;

        return response()
        ->json([
            'message' => 'Bienvenido '.$cliente->name,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'cliente' => $cliente,
        ]);
    } 

    

    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            'res' => true,
            'msg' => "Se ha cerrado sesión.",
        ],200);
    }

}
