<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class wwdRequest extends FormRequest
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
            'foto' => 'mimes:mp4',
        ];
    }
    public function messages()
    {
        return [
            'foto.mimes:mp4' => 'format file yang diizinkan: mp4',
        ];
    }
}
