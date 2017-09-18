<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsSaveRequest extends FormRequest
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
            'nome' => 'required',
            'email'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'É necessário informar o nome',
            'email.required'  => 'É necessário informar o email',
        ];
    }
}
