<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResourceCenterImageRequest extends FormRequest
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
        'image_name' => 'alpha_num|required|unique:marketing_images',
        'book_name' => 'required|unique:marketing_images|string|max:50',
        'category_name' => 'required',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        'download' => 'required'
        ];
    }
}
