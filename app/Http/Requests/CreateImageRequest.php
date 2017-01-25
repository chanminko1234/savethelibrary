<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreateImageRequest extends FormRequest
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
        'book_name' =>'required|unique:marketing_images|string|max:50',
        'author'    =>'required|string|max:30',
        'book_description'  =>'required',
        'book_review'       =>'required',
        'library_name'      =>'required',
        'library_address'   =>'required',
        'library_contact'   =>'required',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        ];
    }
}