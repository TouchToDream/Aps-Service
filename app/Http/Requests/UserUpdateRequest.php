<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|regex:/^\+380[0-9]{9}$/',
            'password' => 'nullable|string|min:4|confirmed',
            'current_password' => 'required|string',
        ];
    }
}
