<?php

namespace App\Http\Requests\Biodates;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBiodatesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'hobby' => 'required',
            'food' => 'required'
        ];
    }
}