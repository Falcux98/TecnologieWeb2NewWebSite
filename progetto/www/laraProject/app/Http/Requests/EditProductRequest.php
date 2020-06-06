<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Validation\Validator;

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
            "codProdotto" => "numeric | required",
            "nome" => "required|max: 30",
            "descrizioneBreve" => "required|max: 50",
            "descrizioneEstesa" => "required|max: 2500",
            "prezzo" => "required|numeric|min: 0",
            "foto" => "required",
            "newfoto" => "image|max: 1024",
            "percentualeSconto" => "integer| min: 0|max: 100",
            "sottocategoria" => "required|numeric"
        ];
    }

    /**
     * genera una risposta 422 in caso di errore di validazione http
     */
    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
