<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\HospitalFormRequest;
use Illuminate\Http\Request;
use App\hospital;
use Illuminate\Support\Facades\Session;

class HospitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $hastaneler=hospital::paginate(15);

        return view('front.partials.hastane.index',compact('hastaneler'));

        //return $cevaplar =hospital::find(1)->cevaplar;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.partials.hastane.ekle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalFormRequest $request)
    {
        //return $request->all();

        hospital::create($request->all());
        Session::flash('durum',1);
        return back();
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
       $hastane=hospital::find($id);
        return view('front.partials.hastane.edit',compact('hastane'));

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
        $hastane=hospital::find($id)->update($request->all());
        if($hastane){
            Session::flash('durum',1);
            return redirect('Hastaneler/');
        }else{
            Session::flash('durum',2);
            return back();
        }

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
