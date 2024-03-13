<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisteredUserRequest extends FormRequest
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
            'email' => 'bail|required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'bail|required|confirmed|string|min:4',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Le champ email est obligatoire.',
            'email.string' => 'Le format de l\'adresse email ne convient pas.',
            'email.lowercase' => 'L\'adresse email doit être en miniscules.',
            'email.email' => 'S\'il vous plaît, mettez une adresse email valide.',
            'email.max' => 'Le champ du nom ne doit pas dépasser 255 caractères.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est obligatoire.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'password.string' => 'Le format du mot de passe ne convient pas.',
            'password.min' => 'Le mot de passe doit comporter au moins 4 caractères.',
        ];
    }
}
