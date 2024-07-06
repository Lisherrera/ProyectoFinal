<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
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
            // 'rut' => ['required','min:9','max:10','unique:jugadores,rut'],
            // 'email' => ['required'],
            // 'direccion' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            // 'nombre.required' => 'Indique el nombre del usuario',
            // 'nombre.alpha' => 'El nombre solo debe llevar letras',
            // 'nombre.min' => 'El nombre debe tener 2 letras mínimo',
            // 'nombre.max' => 'El nombre debe tener 20 letras máximo',
            // 'apellido.required' => 'Indique el apellido del usuario',
            // 'apellido.alpha' => 'El apellido solo debe llevar letras',
            // 'apellido.min' => 'El apellido debe tener 2 letras mínimo',
            // 'apellido.max' => 'El apellido debe tener 20 letras máximo',
            // 'rut.required' => 'Ingrese el RUT',
            // 'rut.min' => 'El rut debe tener al menos 9 caracteres',
            // 'rut.max' => 'El rut debe tener al menos 10 caracteres',
            // 'rut.unique' => 'El RUT :input ya está asignado a otro cliente',
            // 'email.required' => 'Indique el email del usuario',
            // 'direccion.required' => 'Indique la dirección del usuario',
        ];
    }
}
