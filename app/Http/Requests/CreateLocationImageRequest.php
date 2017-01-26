<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLocationImageRequest extends FormRequest
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
            //
        
        'location_name'      =>'required',
        'location_desc'   =>'required',
        'location_address'   =>'required',
        'location_content' =>'required',
        'location_review' => 'required',
        'image_name' => 'alpha_num|required|unique:location_images',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000'
        ];
    }
}