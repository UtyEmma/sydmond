<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|string|unique:posts,title',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image',
            'tags' => 'required|string|json',
            'author' => 'required|string',
        ];
    }
}
