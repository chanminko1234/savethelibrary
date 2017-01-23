<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class EditImageRequest extends FormRequest
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
        return ['book_name',
        'slug',
        'author',
        'category',
        'book_description',
        'book_review',
        'library_name',
        'library_address',
        'library_contact',
        'is_active' => 'required|boolean',
        'is_featured' => 'required|boolean',
        'image' => 'mimes:jpeg,jpg,bmp,png|max:1000'
        ];
    }
}