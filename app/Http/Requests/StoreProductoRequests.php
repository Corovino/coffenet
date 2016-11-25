<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreProductoRequests extends Request
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
            'nombre'=>'required|unique:productos',
            'descripsion'=> 'min:10|max:300',
            'valor'=>'numeric|required',
            'inventario'=> 'required',
            'cantidades'=>'min:1|max:500|numeric|required'
        ];
    }
}
