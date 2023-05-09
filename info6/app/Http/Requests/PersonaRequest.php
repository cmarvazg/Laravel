<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonaRequest extends FormRequest
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
            'tipo_persona_id' => ['required',Rule::in([1, 2]),], 
            'razon_social' => 'required | min:5',
            'persona' => ['required',Rule::in(['Física', 'Moral']),],  
            'rfc' => 'required | min:13 | max:13',
            'domicilio' => 'required | min:5',
            'email' => 'required | min:5',
            'telefono' => 'required | min:10 | max:10'
        ];
    }
}
