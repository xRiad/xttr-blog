<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|min:3',
            'author' => 'required|string',
            'video' => 'required|file|mimes:mp4,avi,mov,wmv',
            'description' => 'required|string',
            'status' => 'integer',
            'category' => 'integer',
            'img' => 'required|image|mimes:jpg,png,webp,svg,gif',
            'visibility' => 'integer'
        ];
    }
}
