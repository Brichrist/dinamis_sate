<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class testimoniRequest extends FormRequest
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
            'name' => 'required',
            'judul' => 'required',
            'desc' => 'required',
            'foto' => 'mimes:jpg,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'harus terisi',
            'judul.required' => 'harus terisi',
            'desc.required' => 'harus terisi',
            'foto.mimes:jpg,jpeg' => 'format file yang diizinkan: jpg, jpeg',
        ];
    }
}
