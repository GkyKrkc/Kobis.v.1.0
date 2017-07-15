<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalFormRequest extends FormRequest
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
            'hastane_adi'=>'required|max:75',
            'hastane_nick'=>'required',
            'hastane_basamak'=>'required',
            'hastane_kategori'=>'required',
            'hastane_detay'=>'required'
        ];

    }
    public function messages(){

        return [
            'hastane_adi.required'=>'Lütfen Hastane Adını Giriniz',
            'hastane_adi.max'=>'Hastane Adı 75 Karakterden Fazla Olmaz',
            'hastane_nick.required'=>'Lütfen Kastane Kısaadı (Nick) Bölümünü Doldurunuz',
            'hastane_basamak.required'=>'Lütfen Hastanenin Kaçıncı Basamak Hastane Olduğunu Seçiniz',
            'hastane_kategori.required'=>'Lütfen Hastane Kategorisini Seçiniz',
            'hastane_detay.required'=>'Lütfen Hastane Detay Bilgilerini Boş Bırakmayınız'
        ];
    }
}
