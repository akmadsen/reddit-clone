<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'handle' => 'required|string|max:255', 
            'description' => 'nullable', 
            'website' => 'nullable', 
            'image' => 'nullable', 
            'hero_image' => 'nullable', 
            'location' => 'nullable', 
        ];
    }
}
