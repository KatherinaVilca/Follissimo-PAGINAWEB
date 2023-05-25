<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required', 'max:255',
            'monto_total' => 'required|min:0',
            'detalle_productos' => 'required|array|min:1',
                'detalle_productos.*.id_producto' => 'required',
                'detalle_productos.*.cantidad' => 'min:0',
                'detalle_productos.*.monto_subtotal' => 'required|min:0',
        ];
    }
}
