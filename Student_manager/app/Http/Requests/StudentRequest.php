<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|min:3',
            'phone' => 'required|digits:10',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Cannot be empty',
            'name.min' => 'More than 3 characters',
            'phone.required' => 'Cannot be empty',
            'phone.digits' => '10 numbers',
            'address.required' => 'Cannot be empty'
        ];
    }
}
