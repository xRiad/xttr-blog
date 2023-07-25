<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutEmployeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',        
            'avatar' => 'image|required|mimes:jpg,png,gif,svg',        
            'name' => 'required|string',        
            'about' => 'required|string'
        ];
    }
}
