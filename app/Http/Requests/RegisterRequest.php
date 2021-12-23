<?php

namespace App\Http\Requests;

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
            'inputNama' => 'required',
            'inputEmail' => 'required|unique:users,name',
            'inputPassword' => 'required',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'inputNama.required' => "Name can't be blank",
            'inputEmail.required' => "Email can't be blank",
            'inputEmail.unique' => "Email already registered",
            'inputPassword.required' => "Password can't be blank",
            'role.required' => "Must choose role",
        ];
    }
}
