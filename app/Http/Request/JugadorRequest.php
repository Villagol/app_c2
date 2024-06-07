<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'nombre' => ['required','min:2','max:15'],
            'apellido' => ['required','min:2','max:15'],
            'nickname' => ['required','min:2','max:15'],
            'agente_1'=>['required','min:2','max:15'],
            'agente_2'=>['required','min:2','max:15'],
            'agente_3'=>['required','min:2','max:15'],
        ];
    }

    public function messages() :array
    {
        return [
            'nombre.required' => 'Indique el nombre del jugador',
            'nombre.min' => 'El nombre debe tener como mínimo 2 letras',
            'nombre.max' => 'El nombre debe tener como máximo 15 letras',
            'apellido.required' => 'Indique el apellido del jugador',
            'apellido.min' => 'El apellido debe tener como mínimo 2 letras',
            'apellido.max' => 'El apellido debe tener como máximo 15 letras',
            'nickname.required' => 'Indique el nickname del jugador',
            'nickname.min' => 'El nickname debe tener como mínimo 2 letras',
            'nickname.max' => 'El nickname debe tener como máximo 15 letras',
            'agente_1.required' => 'Indique el agente 1 del jugador',
            'agente_1.min' => 'El agente 1 debe tener como mínimo 2 letras',
            'agente_1.max' => 'El agente 1 debe tener como máximo 15 letras',
            'agente_2.required' => 'Indique el agente 2 del jugador',
            'agente_2.min' => 'El agente 2 debe tener como mínimo 2 letras',
            'agente_2.max' => 'El agente 2 debe tener como máximo 15 letras',
            'agente_3.required' => 'Indique el agente 3 del jugador',
            'agente_3.min' => 'El agente 3 debe tener como mínimo 2 letras',
            'agente_3.max' => 'El agente 3 debe tener como máximo 15 letras',
        ];
    }
}