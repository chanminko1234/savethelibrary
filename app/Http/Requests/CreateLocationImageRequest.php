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
        'library_name' => 'required',
    'library_address' => 'required' , 
    'library_town' => 'required',
        'contact_name'      =>'required',
        'contact_no'   =>'required',
        'email'   =>'required',
        'facebook' =>'required',
        'library_location' =>'required',
        'date' =>'required',
        'library_description' =>'required',
        'city' =>'required',
        'services' =>'required',
        'image_name' => 'alpha_num|required|unique:location_images',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000'
        ];
    }
}
