<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ingreso_VehiculoCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_ingreso' => 'required',
            'estado' => 'required',
            'vehiculos_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'fecha_ingreso.required' => 'La fecha de ingreso debe ser un campo requerido',
            'estado.required' => 'El Estado debe ser un campo requerido',
            'vehiculos_id.required' => 'El Vehiculo debe ser un campo requerido',
        ];
    }
}
