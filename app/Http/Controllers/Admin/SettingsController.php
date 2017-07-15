<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $ayarlar=Setting::all();

        return view('admin.site_ayarlari',compact('ayarlar'));
        //return dd($ayarlar);
    }
    public function guncelle(Request $request){

        $this->validate($request,[
               'baslik'=>'required',
               'author'=>'required',
               'aciklama'=>'required',
               'keywords'=>'required',
              // 'telefon'=>'required',
               'fax'=>'required',
               'adres'=>'required',
               'email'=>'required'

        ]);


        Setting::find(1)->update(["value"=>$request->baslik]);
        Setting::find(2)->update(["value"=>$request->author]);
        Setting::find(3)->update(["value"=>$request->aciklama]);
        Setting::find(4)->update(["value"=>$request->keywords]);
       // Setting::find(5)->update(["value"=>$request->telefon]);
        Setting::find(6)->update(["value"=>$request->fax]);
        Setting::find(7)->update(["value"=>$request->adres]);
        Setting::find(8)->update(["value"=>$request->email]);

        Session::flash('durum',1);
        return back();
    }
}
