<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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
    public function rules(){
        $unique_id = $this->id;
        return [
            'image' => 'image|nullable',
            'title' => "required|string|unique:galleries,title,$unique_id,unique_id",
            'description' => 'required|string'
        ];
    }
}
