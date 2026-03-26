<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'=>'required|min:3',
            'categoria'=>'required',
            'ingredienti'=>'required',
            'prezzo'=>'required|numeric',
            'img'=>'required|image'

        ];
    }



public function messages(): array
    {
        return [
            'nome.required'        => 'Il nome del piatto è obbligatorio.',
            'nome.min'            => 'Il nome deve contenere almeno tre caratteri',
            'nome.max'             => 'Il nome non può superare i 255 caratteri.',
            'categoria.required'   => 'La categoria è obbligatoria.',
            'ingredienti.required' => 'Gli ingredienti sono obbligatori.',
            'prezzo.required'      => 'Il prezzo è obbligatorio.',
            'prezzo.numeric'       => 'Il prezzo deve essere un numero.',
            'img.required'         => "L'immagine è obbligatoria.",
            'img.image'            => 'Il file deve essere un\'immagine.'
        ];
}


}
