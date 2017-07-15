<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
protected $table="hospitals";
protected $fillable=[
    'hastane_adi',
    'hastane_nick',
    'hastane_basamak',
    'hastane_kategori',
    'hastane_detay',
    'durum'
];

    public function cevaplar()
    {
        return $this->belongsToMany('App\Cevaplar', 'hasta_hastane_cevaps', 'hastane_id', 'cevap_id');
    }
}
