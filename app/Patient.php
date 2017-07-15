<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $table="patients";
    protected $fillable=[
        'baslama_tarih',
        'mernis_no',
        'hasta_adi',
        'uyruk',
        'kategori',
        'basamak',
        'yas',
        'gun',
        'user_id',
        'aciklama',
        'il_durum',
        'durum',
        'olumsuz',
        'askom',
        '_token'
    ];



}

