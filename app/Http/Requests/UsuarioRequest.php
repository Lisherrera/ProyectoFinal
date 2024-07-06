<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
                'nombre' => ['required','alpha','min:2','max:20'],
                'password' => ['required','min:4','min:8'],
                'email' => ['required','unique:usuarios,email'],
                'activo' => ['boolean'],
                'perfil' => ['required','exists:perfiles,id'],
        ];
    }

    public function messages(): array
    {
        return [
                'nombre.required' => 'Indique el nombre del usuario',
                'nombre.alpha' => 'El nombre solo debe llevar letras',
                'nombre.min' => 'El nombre debe tener 2 letras mínimo',
                'nombre.max' => 'El nombre debe tener 20 letras máximo',
                'password.required' => 'Indique la contraseña del usuario',
                'password.min' => 'La contraseña debe tener 2 letras mínimo',
                'password.max' => 'La contraseña debe tener 8 letras máximo',
                'email.required' => 'Indique el email del usuario',
                'rut.unique' => 'El Email :input ya está asignado a otro usuario',
                'activo.boolean' => 'El campo activo es requerido',
                'perfil.required' => 'El campo perfil es requerido',
                'perfil.exists' => 'Por favor seleccione un perfil válido',
        ];
    }
}
