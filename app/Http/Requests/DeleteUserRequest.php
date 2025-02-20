<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteUserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true; 

    }
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id', 
        ];
    }
}