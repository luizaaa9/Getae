<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipeRequest extends FormRequest
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
        if (!$this->isMethod('GET')) {
            return [
                'nome' => 'required|min:3|max:255',
                'turma' => 'required',
                'contato' => 'required|string',
                'descricao' => 'required|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ];
        }

        return [];
    }
}
