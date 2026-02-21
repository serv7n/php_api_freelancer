<?php

namespace App\Http\Requests\Auth;

use App\Enum\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class NewUserRequest extends FormRequest
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
//    - name
//- phone unique
//- cpf unique
//- email unique
//- password
//- deleted_at
//- city_id
//- role (admin, client, freelancer)
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "phone" => "required|unique:users,phone",
            "email" => "required|unique:users,email",
            "cpf" => "required|max:11|unique:users,cpf",
            "password" => "required|min:8|max:255",
            "city_id" => "required|integer",
            "role"=> ["required", new Enum(Role::class)]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser um texto válido.',

            'phone.required' => 'O telefone é obrigatório.',
            'phone.unique' => 'Este telefone já está cadastrado.',

            'email.required' => 'O e-mail é obrigatório.',
            'email.unique' => 'Este e-mail já está cadastrado.',

            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.max' => 'O CPF deve ter no máximo 11 caracteres.',
            'cpf.unique' => 'Este CPF já está cadastrado.',

            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.max' => 'A senha deve ter no máximo 255 caracteres.',

            'city_id.required' => 'A cidade é obrigatória.',
            'city_id.integer' => 'A cidade deve ser um ID válido.',

            'role.required' => 'O perfil é obrigatório.',
            'role.enum' => 'O perfil selecionado é inválido.',
        ];
    }

}
