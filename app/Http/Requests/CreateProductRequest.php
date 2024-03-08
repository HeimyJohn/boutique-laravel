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
            'name' => ['required', 'string', 'min:8', 'max:255'],
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => ['required', 'integer'],
            'content' => ['required', 'tinyText'],
            'stock' => ['required', 'integer'],
            'categories' => ['required'],

        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
//            'slug' => $this->input('slug') ?: \Str::slug($this->input('title')),
            'price' => (int) $this->price,
            'stock' => (int) $this->stock,
        ]);
    }
}
