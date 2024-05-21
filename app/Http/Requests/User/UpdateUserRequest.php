<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'string',
            'last_name' => 'string',
            'phone' => 'numeric|unique:users,phone,'.$this->id,
            'email' => 'email|unique:users,email,'.$this->id,
            'role' => 'in:ADMIN,USER',
            'status' => 'in:ACTIVE,INACTIVE',
        ];
    }
    public function attributes()
    {
        return [
            'first_name' => 'Prénom',
            'last_name' => 'Nom',
            'phone' => 'Email',
            'email' => 'Téléphone',
            'role' => 'Role',
            'status' => 'Status',
        ];
    }
}
