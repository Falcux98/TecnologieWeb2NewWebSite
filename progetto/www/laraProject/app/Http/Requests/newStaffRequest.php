<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newStaffRequest extends FormRequest
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
            "nome" => "required | max: 30",
            "cognome" => "required | max: 30",
            "dataNascita" => "required | date",
            "occupazione" => "max: 30",
            "residenza" => "max: 30",
            "username" => "required | min: 6 | unique:users",
            "password" => "nullable | required_with: password_confirmation | string | confirmed | min: 8"
        ];
    }
}
