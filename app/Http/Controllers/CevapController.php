<?php

namespace App\Http\Controllers;

use App\Cevaplar;
use App\hasta_hastane_cevap;
use App\hospital;
use App\Http\Controllers\Controller;
use App\Http\Requests\CevapRequest;
use App\Http\Requests\PatientsRequest;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CevapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
$cevaplar=Cevaplar::all();
       return view('front.partials.cevap.index',compact('cevaplar'));


        /*$dt1 = Carbon::yesterday();
        $dt2 = Carbon::now();

        $current = Patient::where('created_at','>=',$dt1)
            ->where('created_at','<=',$dt2)
            ->get();
        return $current;*/



    }

    public function listele(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.partials.cevap.ekle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baslama_tarih = $request->baslama_tarih." 00:00:00";
        $bitis_tarih   = $request->bitis_tarih." 23:59:59";
        $kategori  = $request->input('kategori');
        $cevaplar  = $request->input('cevap');

        $fromDate = new Carbon('last week');
        $toDate = new Carbon('now');
        $now =Carbon::now();
        $hastaneler=hospital::where('durum',1)->get();

        if($kategori){
            $kategori  = $request->input('kategori');
        }else{
            $kategori="";
        }

        if($cevaplar){
            $cevaplar  = $request->input('cevap');
        }else{
            $cevaplar="";
        }

    $sonuclar=DB::table('hasta_hastane_cevaps')
        ->where('kategori_id','LIKE','%'.$kategori.'%')
        ->where('cevap_id','LIKE','%'.$cevaplar.'%')
        ->whereBetween('hasta_hastane_cevaps.updated_at', [$baslama_tarih, $bitis_tarih])

        ->leftJoin('hospitals','hasta_hastane_cevaps.hastane_id','hospitals.id')
        ->leftJoin('cevaplars','hasta_hastane_cevaps.cevap_id','cevaplars.id')
        ->select('hastane_id','hastane_adi','hastane_nick','cevap_id','cevap_adi',DB::raw('count(*) as toplam,hastane_id,cevap_id','hastane_nick','cevap_adi'))
        ->groupBy('hastane_id','hastane_adi','hastane_nick','cevap_id','cevap_adi')
        ->orderBy('hastane_id','ASC')
        ->get();


        //$arrResult = array_merge($hastaneler, $sonuclar);
        return view('front.partials.cevap.sonuc',compact('hastaneler','sonuclar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
