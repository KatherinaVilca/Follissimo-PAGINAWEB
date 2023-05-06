<?php

namespace App\Http\Controllers\Api;

use App\Models\Tamaño;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class TamañoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamaños = Tamaño::all();
        return response()->json(['data' => $tamaños]);
    }
}
