<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NotifyPaymentCreateRequest extends Request
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
            'nro_referencia' => 'required|numeric',
            'monto' => 'required|numeric',
            'ci' => 'required|numeric',
            'banco' => 'required|in:Banesco,Provincial,Mercantil,Bicentenario,Venezuela',
        ];
    }
}
