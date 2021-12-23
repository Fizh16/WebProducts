<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'inputPrice' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'inputNama.required' => "Name can't be blank",
            'inputPrice.required' => "Price can't be blank",
        ];
    }
}
