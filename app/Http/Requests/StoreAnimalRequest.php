<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            'name' => 'required|max:20',
            'specie' => 'required|max:30',
            'date_of_birth' => 'nullable|date_format:Y-m-d|min:3|max:255',
            'genre' => 'required|boolean',
            'owner' => 'required|max:20',
            'note' => 'required|min:10|max:255',
        ];
    }
}
