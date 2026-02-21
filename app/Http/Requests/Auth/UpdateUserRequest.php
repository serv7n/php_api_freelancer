<?php

namespace App\Http\Requests\Auth;

use App\Enum\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateUserRequest extends FormRequest
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
            "name" => "required|string",

// user()?-> serve para segurancao para pegar o id
            "email" => ["required", Rule::unique("users")->ignore($this->user()?->id) ],
            "cpf" => ["required","numeric:11", Rule::unique("users")->ignore($this->user()?->id) ],
            "password" => "required|min:8|max:255" ,
            "city_id" => "required|integer",
            "role"=> ["required", new Enum(Role::class)]
        ];
    }
    public function messages(): array
    {
        return [
            "name.required" => "O nome é obrigatório.",
            "name.string" => "O nome deve ser um texto válido.",

            "phone.required" => "O telefone é obrigatório.",

            "email.required" => "O e-mail é obrigatório.",
            "email.unique" => "Este e-mail já está cadastrado.",

            "cpf.required" => "O CPF é obrigatório.",
            "cpf.max" => "O CPF deve ter no máximo 11 caracteres.",

            "password.required" => "A senha é obrigatória.",
            "password.min" => "A senha deve ter no mínimo 8 caracteres.",
            "password.max" => "A senha deve ter no máximo 255 caracteres.",

            "city_id.required" => "A cidade é obrigatória.",
            "city_id.integer" => "A cidade deve ser um identificador válido.",

            "role.required" => "O perfil é obrigatório.",
        ];
    }

}
