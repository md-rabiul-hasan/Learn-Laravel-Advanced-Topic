<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FromValidationRequest extends FormRequest
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
            'email'    => ['required'],
            'password' => ['required','min:6']
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email'    => ['required'],
            'password' => ['required','min:6']
        ];
    }



}
