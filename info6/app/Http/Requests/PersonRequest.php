<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
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
            'type_person_id' => ['required',Rule::in([1, 2]),], 
            'business_name' => 'required',
            'person' => ['required',Rule::in(['Física', 'Moral']),],  
            'rfc' => 'required | min:13 | max:13',
            'home' => 'required',
            'email' => 'required',
            'phone' => 'required | min:10 | max:10'
        ];
    }
}
