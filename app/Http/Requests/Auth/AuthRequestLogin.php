<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequestLogin extends FormRequest
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
            "email" => "required|email",
            "password" => "required|min:6|string|max:255"
        ];
    }

    public function messages(): array
    {
        return [
            "email.email" => "Precisa ser Email",
            "email.required" => "Precisa ser um campo obrigatorio",
            "password.required" => "Precisa ser um campo obrigatorio",
            "password.min" => "Precisa ter ao menos 6 caracteres",
            "password.max" => "Precisa ter ao menos 255 caracteres",
            "password.string" => "Precisa ser um campo string"
        ];
    }
}
