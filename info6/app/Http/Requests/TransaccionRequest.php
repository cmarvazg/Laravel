<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransaccionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return 
        [
            'tipo_transaccion_id' => ['required',Rule::in([1, 2]),],
            'persona_id' => ['required', 'exists:personas,id'],
            'monto' => 'required',
            'fecha' => 'required',
            'metodo' => ['required',Rule::in(['Depósito', 'Transferencia']),],  
            'referencia' => 'required'
        ];
    }
}
