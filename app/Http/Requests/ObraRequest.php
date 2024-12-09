<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObraRequest extends FormRequest
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
			'categoria_id' => 'required',
			'titulo' => 'required|string',
			'descripcion' => 'required|string',
			'precio' => 'required',
			// 'imagen_urls' => 'required|string',
            // 'imagen_urls' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            'imagen_urls' => 'nullable|array', // Aceptar un array de imágenes
            'imagen_urls.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validar cada imagen


        ];
    }
}
