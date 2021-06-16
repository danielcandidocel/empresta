<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class SimulatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'valor_emprestimo' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'instituicoes'     => 'nullable|array',
            'convenios'        => 'nullable|array',
            'parcela'          => 'nullable|integer',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'valor_emprestimo.required' => 'O valor do empréstimo é obrigatório',
            'valor_emprestimo.regex'    => 'O valor do empréstimo é deve conter um valor decimal',
            'instituicoes.array'        => 'O campo instituições deve ser do tipo Array',
            'convenios.array'           => 'O campo instituições deve ser do tipo Array',
            'parcela.integer'           => 'O campo parcela deve ter um valor numérico',
        ];
    }
}
