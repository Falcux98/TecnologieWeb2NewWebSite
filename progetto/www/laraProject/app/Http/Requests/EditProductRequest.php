<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'codProdotto' => "required",
            "nome" => "required|max: 30",
            "descrizioneBreve" => "required|max: 50",
            "descrizioneEstesa" => "required|max: 2500",
            "prezzo" => "required|numeric|min: 0",
            "foto" => "image|max: 1024",
            "percentualeSconto" => "integer| min: 0|max: 100",
            "sottocategoria" => "required|numeric"
        ];
    }
}
