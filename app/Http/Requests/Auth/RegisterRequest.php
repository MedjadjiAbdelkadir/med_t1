<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|numeric|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required_with:password|same:password|min:8|max:255',

            // 'role' => 'in:ADMIN,USER',
            // 'status' => 'in:ACTIVE,INACTIVE',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'Prénom',
            'last_name' => 'Nom',
            'phone' => 'Email',
            'email' => 'Téléphone',
            'password' => 'Mot de passe',
            'password_confirmation' => 'Confirmation mot de passe',
        ];
    }
}
