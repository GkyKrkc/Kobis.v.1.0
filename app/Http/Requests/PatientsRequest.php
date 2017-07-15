<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientsRequest extends FormRequest
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
            'baslama_tarih'=>'required',
            'mernis_no'=>'required|max:11|min:11',
            'hasta_adi'=>'required',
            'uyruk'=>'required',
            'kategori'=>'required',
            'basamak'=>'required',
            'yas'=>'required',
            'aciklama'=>'required',
            'gun'=>'required',
            'il_durum'=>'required',
        ];

    }
    public function messages(){

        return [
            'baslama_tarih.required'=>'Zorunlu Alan',
            'mernis_no.required'=>'Zorunlu Alan',
            'mernis_no.max'=>'En Fazla 11 Karakter Girilebilir',
            'mernis_no.min'=>'En Az 11 Karakter Girilebilir',
            'hasta_adi.required'=>'Zorunlu Alan',
            'uyruk.required'=>'Zorunlu Alan',
            'kategori.required'=>'Zorunlu Alan',
            'basamak.required'=>'Zorunlu Alan',
            'yas.required'=>'Zorunlu Alan',
            'aciklama.required'=>'Zorunlu Alan',
            'gun.required'=>'Zorunlu Alan',
            'il_durum.required'=>'Zorunlu Alan'
        ];
    }
}
