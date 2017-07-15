<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cevaplar extends Model
{
    protected $table="cevaplars";
    protected $fillable=[
        'cevap_adi',
        'cevap_detay',
        'created_at',
        'updated_at'
    ];

    public function hastanedurum()
    {
        return $this->belongsToMany('App\hospital', 'hasta_hastane_cevaps', 'cevap_id', 'hastane_id');
    }
}
