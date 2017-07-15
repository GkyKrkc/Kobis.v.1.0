<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CevapRequest extends FormRequest
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
            'cevap_adi'=>'required|max:30',
            'cevap_detay'=>'required'
        ];

    }
    public function messages(){

        return [
            'cevap_adi.required'=>'Lütfen Hastaneler İçin  Cevap Durum Adını Giriniz',
            'cevap_adi.max'=>'Hastane Cevap Durum Adı 30 Karakterden Fazla Olamaz',
            'cevap_detay.required'=>'Lütfen Kısa Açıklama Giriniz'
        ];
    }
}
