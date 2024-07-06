<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehiculoRequest extends FormRequest
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
            // 'marca' => ['required'],
            // 'modelo' => ['required'],
            // 'anio' => ['required','min:4','max:4'],
            // 'patente' => ['required','unique:vehiculos,patente'],
            // 'precio' => ['required'],
        ];
    }
    
    public function messages(): array
    {
        return [
            // 'marca.required' => 'Indique la marca del vehiculo',
            // 'modelo.required' => 'Indique el modelo del vehiculo',
            // 'anio.required' => 'Indique el año del vehiculo',
            // 'anio.min' => 'El año debe tener 4 caracteres',
            // 'anio.max' => 'El año debe tener 4 caracteres',
            // 'patente.required' => 'Indique la patente del vehiculo',
            // 'patente.unique' => 'La patente :input ya está asignada a otro vehiculo',
            // 'precio.required' => 'Indique el precio del vehiculo',
        ];
    }
}
