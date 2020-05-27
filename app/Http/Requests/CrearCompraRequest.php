<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearCompraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha' => 'required|date',
            'descripcion' => 'required|min:6|max:255',
            'proveedor_id' => 'required|exists:compras,proveedor_id',
        ];
    }
}
