<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLatestNewsSliderImageRequest extends FormRequest
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
        'news_title'            =>'required|unique:latest_news_sliders|string|max:50',
        'news_description'      =>'required',
        'date'                  =>'required',
        'time'                  =>'required',
        'location'              =>'required',
        'contact'               =>'required',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        'image_name' => 'alpha_num|required|unique:latest_news_sliders'

        ];
    }
}
