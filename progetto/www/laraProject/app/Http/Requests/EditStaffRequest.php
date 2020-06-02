<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditStaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            "residenza" => "max: 30"
        ];
    }
}
