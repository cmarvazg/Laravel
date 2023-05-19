<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionRequest extends FormRequest
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
            'type_transaction_id' => ['required',Rule::in([1, 2]),],
            'proyect_id' => 'required',
            'person_id' => ['required', 'exists:people,id'],
            'amount' => 'required',
            'date' => 'required',
            'method' => ['required',Rule::in(['Depósito', 'Transferencia']),],  
            'reference' => 'required'
        ];
    }
}
