<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => "bail",
            'author' => "bail",
            'publisher' => "bail",
            'isbn' => "bail",
            'genre' => "bail",
            'publication_year' => "bail",
            'description' => "bail",
            'image' => "image",
            'price' => "bail"
        ];
    }
}
