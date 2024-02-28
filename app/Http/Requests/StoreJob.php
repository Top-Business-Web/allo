<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJob extends FormRequest
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
            'image' => 'sometimes|image',
            'title_ar' => 'required',
            'title_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'يجب ان تكون صورة',
            'title_ar.required' => 'العنوان بالعربي مطلوب',
            'title_en.required' => 'العنوان بالانجليزي مطلوب',
            'description_ar.required' => 'التفاصيل بالعربي مطلوب',
            'description_en.required' => 'التفاصيل بالانجليزي مطلوب',
        ];
    }
}
