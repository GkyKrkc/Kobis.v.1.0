<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YeniKayitController extends Controller
{
    public function created(){

        $hastaneler=[
            'Özel Megapark',
            'Özel Marashlife',
            'Özel Markasi',
            'Özel Vatan'
        ];

        return view('front.partials.yeni_kayit',compact('hastaneler'));
    }
}
