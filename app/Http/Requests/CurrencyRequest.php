<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
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
            'title'       =>  'required|min:2|max:255',
            'short_name'  =>  'required|min:2|max:10',
            'price'       =>  'required|numeric|min:0',
            'logo_url'    =>  'required|url'
        ];
    }
}