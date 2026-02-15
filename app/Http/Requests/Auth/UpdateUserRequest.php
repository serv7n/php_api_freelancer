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
            "phone" =>  "required",
            "email" => ["required", Rule::unique("users")->ignore($this->route("id")) ],
            "cpf" => "required|max:11",
            "password" => "required|min:8|max:255",
            "city_id" => "required|integer",
            "role"=> ["required", new Enum(Role::class)]
        ];
    }
}
