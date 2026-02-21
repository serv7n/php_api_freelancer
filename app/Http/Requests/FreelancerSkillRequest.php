<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreelancerSkillRequest extends FormRequest
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
            'skill_id' => 'required|integer|exists:skills,id',
            'hourly_rate' => 'required|numeric|min:0',
        ];
    }
    public function messages(): array
    {
        return [
            'skill_id.required' => 'O campo skill_id é obrigatório.',
            'skill_id.integer' => 'O campo skill_id deve ser um número inteiro.',
            'skill_id.exists' => 'A skill informada não existe.',

            'hourly_rate.required' => 'O campo hourly_rate é obrigatório.',
            'hourly_rate.numeric' => 'O campo hourly_rate deve ser numérico.',
            'hourly_rate.min' => 'O campo hourly_rate deve ser no mínimo 0.',
        ];
    }
}
