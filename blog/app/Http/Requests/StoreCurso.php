<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Acá se puede verificar el rol y permiso, auqnue también se puede usar "policies"
     */
    public function authorize(): bool
    {
        return true;//Se cambia true porque sino NO deja hacer nada por ahora
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //la validación es antes de la creación -> https://laravel.com/docs/11.x/validation#available-validation-rules
        //traemos las validaciones del controlador y en la función se cambia de atributos "Request" a StoreCurso"
        return [
            'name'=>'required|min:3',
            'description'=>'required',
            'categoria'=>'required'
        ];
    }

    //para cambiar los mensajes de error como yo quiera se ponen acá
    public function messages(): array
    {
        return[
            'description.required' => 'Ojo la descripción es MUY obligatoria'
        ];
    }

    //cambiar las traducciones para los atributos
    public function attributes(): array{
        return [
            'name'=>'nombre del cursito'
        ];
    }
}
