<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasta_hastane_cevap extends Model
{
    protected $table="hasta_hastane_cevaps";
    protected $fillable=[
        'hasta_id',
        'hastane_id',
        'cevap_id',
        'kategori_id',
    ];
}
