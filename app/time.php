<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class time extends Model
{
   protected $table="times";
    protected $fillable=[
        'time',
        'patient_id',
        'aciklama',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
