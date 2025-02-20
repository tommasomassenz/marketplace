<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=> 'required|unique:users|min:6',
            'email'=> 'required|unique:users|email',
            'password'=> 'required|min:8',
            'nome'=> 'required|min:3',
            'cognome'=> 'required|min:3',
            'ddn'=> 'required|date',
            'ddr'=> 'required|date',
            'indirizzo'=> 'required',
            'numtelefono'=> 'required'

        ];
    }
}
