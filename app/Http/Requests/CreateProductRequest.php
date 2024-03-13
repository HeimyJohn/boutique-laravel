<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:8|max:255',
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => 'required|integer',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le champ nom est obligatoire',
            'name.string' => 'Le champ "nom" doit être une chaîne de caractères',
            'name.max' => 'Le champ "nom" ne doit pas dépasser 255 caractères',
            'name.min' => 'Le champ "nom" doit comporter au moins 8 caractères',
            'price.required' => 'Le champ "prix" est obligatoire',
            'price.integer' => 'Le champ prix doit être un nombre entier',
            'description.required' => 'Le champ "contenu" est obligatoire',
            'description.string' => 'Le champ contenu doit être un string',
            'stock.required' => 'Le champ stock est obligatoire',
            'stock.integer' => 'Le champ "stock" doit être un nombre entier',
            'categories.required' => 'Le champ "catégories" doit être renseigné',
        ];
    }

}
