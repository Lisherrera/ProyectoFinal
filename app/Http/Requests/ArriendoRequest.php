<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArriendoRequest extends FormRequest
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
        
            // 'nombre' => ['required','alpha','min:2','max:20'],
            // 'apellido' => ['required','alpha','min:2','min:8'],
            // 'rut' => ['required','min:9','max:10'],
            // 'email' => ['required'],
            // 'tipo' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            // 'nombre.required' => 'Indique el nombre del cliente',
            // 'nombre.alpha' => 'El nombre solo debe llevar letras',
            // 'nombre.min' => 'El nombre debe tener 2 letras mínimo',
            // 'nombre.max' => 'El nombre debe tener 20 letras máximo',
            // 'apellido.required' => 'Indique el apellido del cliente',
            // 'apellido.alpha' => 'El apellido solo debe llevar letras',
            // 'apellido.min' => 'El apellido debe tener 2 letras mínimo',
            // 'apellido.max' => 'El apellido debe tener 20 letras máximo',
            // 'rut.required' => 'Ingrese el rut del cliente',
            // 'rut.min' => 'El rut debe tener al menos 9 caracteres',
            // 'rut.max' => 'El rut debe tener al menos 10 caracteres',
            // 'rut.unique' => 'El rut :input ya está asignado a otro cliente',
            // 'email.required' => 'Indique el email del vendendor',
            // 'tipo.required' => 'Indique el tipo de vehiculo',
        ];
    }
}
