<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFilmeRequest extends FormRequest
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
        // Pega o ID da rota (se for update)
        $id = $this->route('filme');
        return [
            'titulo' => [
                'required',
                'string',
                // unique na tabela filmes,
                // ignorando o registro com id = $id
                Rule::unique('filmes')->ignore($id),
            ],
            'ano' => 'required|integer|min:1888|max:2099',
            'sinopse' => 'nullable|string|max:2000',
            'duracao' => 'required|integer|min:1',
            'poster' => 'nullable|image|mimes:jpeg,png,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O título é obrigatório.',
            'ano.min' => 'O cinema existe desde 1888.',
            'ano.max' => 'Ano inválido.',
        ];
    }
}
