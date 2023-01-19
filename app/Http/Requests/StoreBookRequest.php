<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => "required|unique:books|max:300",
            'author' => "required",
            'publisher' => "required",
            'isbn' => "required",
            'genre' => "required",
            'publication_year' => "required",
            'description' => "required",
            'image' => "required",
            'price' => "required"
        ];
    }
}
