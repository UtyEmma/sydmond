<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        $unique_id = $this->id;

        return [
            'title' => "required|string|unique:posts,title,$unique_id,id",
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'tags' => 'required|string|json',
            'author' => 'required|string',
        ];
    }
}
