<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AddPhotoRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'tag' => 'required',
            'filename' => 'required|mimes:jpeg,jpg,png|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'filename.required' => 'Nie wybrałeś żadnego zdjęcia',
            'filename.mimes' => 'Plik musi być w jednym z formatów: jpeg, jpg, png',
            'filename.max' => 'Plik nie może być większy niż 2 Mb',
        ];
    }
}
