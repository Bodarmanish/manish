<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myform extends FormRequest
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
        return ["name"=>"required",
                "email"=>"required|email|unique:user",
                "age"=>"required|numeric"
               ];
    }
    public function messages()
    {
        return["name.required"=>"Enter the Name",
                "email.required"=>"Enter the Email",
                "age.required"=>"Enter the Age"
              ];

    }
}
