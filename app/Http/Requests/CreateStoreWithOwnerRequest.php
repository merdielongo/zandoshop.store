<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreWithOwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'string|required',
            'type' => 'int|exists:store_types,id',
            'store_email' => 'nullable|string|email|unique:stores,email',
            'store_city' => 'nullable|string',
            'store_country' => 'required|string',
            'store_address' => 'nullable|string',
            'lastname' => 'string|required',
            'middlename' => 'string|nullable',
            'firstname' => 'required|string',
            'gender' => 'string|required',
            'birthdate' => 'string|date|required',
            'birthplace' => 'string|required',
            'email' => 'email|string|unique:users,email',
            'phone' => 'nullable|string',
            'nationality' => 'string|nullable',
            'city' => 'string|nullable',
            'country' => 'string|required',
            'identity_type' => 'required|exists:identity_types,id',
            'identity_number' => 'required|string',
            'address' => 'string|nullable'
        ];
    }
}
