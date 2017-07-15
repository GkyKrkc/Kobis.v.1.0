<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Http\Requests\PatientsRequest;
use App\Patient;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.partials.arama.ara');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hasta = $request->hasta_adi;
        $baslama_tarih = $request->baslama_tarih." 00:00:00";
        $bitis_tarih   = $request->bitis_tarih." 23:59:59";
        $kategori  = $request->kategori;
        $basamak   = $request->basamak;

        $veriler=Patient::
              whereBetween('updated_at', [$baslama_tarih, $bitis_tarih])
            ->where('kategori','LIKE', '%'.$kategori.'%')
            ->where('basamak','LIKE', '%'.$basamak.'%')
            ->where('hasta_adi','LIKE', '%'.$hasta.'%')
            ->get();
        return view('front.partials.arama.index',compact('veriler'));
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
