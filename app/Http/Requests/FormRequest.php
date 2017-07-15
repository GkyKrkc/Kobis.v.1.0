<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

    }

    public function messages(){

        return [
            'hastane_adi.required'=>'Lütfen Hastane Adını Giriniz',
            'hastane_adi.max'=>'Hastane Adı 5 Karakterden Fazla Olmaz',
            'hastane_detay.required'=>'Lütfen Hastane Detay Bilgilerini Boş Bırakmayınız'
        ];
    }
}
