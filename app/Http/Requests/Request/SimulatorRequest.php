<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class SimulatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'valor_emprestimo' => 'required|float',
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
            'valor_emprestimo.float'    => 'O valor do empréstimo é deve conter um valor decimal',
            'instituicoes.array'        => 'O campo instituições deve ser do tipo Array',
            'convenios.array'           => 'O campo instituições deve ser do tipo Array',
            'parcela.integer'           => 'O campo parcela deve ter um valor numérico',

        ];
    }
}
