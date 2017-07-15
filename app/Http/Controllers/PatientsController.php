<?php

namespace App\Http\Controllers;

use App\Cevaplar;
use App\hasta_hastane_cevap;
use App\hospital;
use App\Http\Requests\PatientsRequest;
use App\Patient;
use App\Resim;
use App\time;
use App\Upload;
use PDF;

use Carbon\Carbon;
use Ramsey\Uuid\Converter\TimeConverterInterface;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $yhastalar=Patient::where('kategori','1')->where('durum',null)->paginate(10);
        $y=Patient::where('kategori','1')->where('durum',null)->paginate(10)->count();
        $phastalar=Patient::where('kategori','2')->where('durum',null)->paginate(10);
        $ehastalar=Patient::where('kategori','3')->where('durum',null)->paginate(10);

        return view('front.partials.hasta.index',compact('yhastalar','phastalar','ehastalar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hastaneler=hospital::where('durum','=','1')->get();
        $cevaplar=Cevaplar::all();
        $user=Auth::user()->id;

        return view('front.partials.hasta.ekle',compact('hastaneler','cevaplar','user'));
        //return view('front.partials.hasta.ekle');

        //return view('front.partials.hasta.detay');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientsRequest $request)
    {

        $now   = date('Y-m-d H:i:s');
        $today =Carbon::today();
        //$tc    = $request->input('mernis_no');
        //$hasta_kayit_kontrol =Patient::where('mernis_no','=',$tc)->where('created_at','>',$today)->where('created_at','<',$now)->get();

            $kayitlar=$request->all();
            $hastakayit = Patient::create($kayitlar);

/*Resim Yüklemek İçin aşağıdaki Kod
        if($resim = $request->file("resim"))
        {
            $time = time();
            $resim_isim = $time.".".$resim->getClientOriginalExtension();
            $thumb = "thumb_".$time.".".$resim->getClientOriginalExtension();
            Image::make($resim->getRealPath())->fit(1900,872)->fill(array(0,0,0,0.5))->save(public_path("uploads/".$resim_isim));
            Image::make($resim->getRealPath())->fit(600,400)->save(public_path("uploads/".$thumb));
            $input = [];
            $input["isim"] = $resim_isim;
            $input["imageable_id"] = $hastakayit->id;
            $input["imageable_type"] = "App\Patient";
            Resim::create($input);
        }

*/


        $hasta = $request->input('hasta_adi');
            $kategori_id = $request->input('kategori');
            $hastasorgu = Patient::all()->last();

            $hasta_id = $hastasorgu->id;

            $hastaneler = $request->input('hastane');

            $cevapdata[] = [];
            foreach ($hastaneler as $key => $value) {
                $cevapdata = [
                    'hasta_id' => $hastasorgu->id,
                    'hastane_id' => $key,
                    'cevap_id' => $value,
                    'kategori_id' => $kategori_id
                ];
                $cevapkayit = hasta_hastane_cevap::create($cevapdata);

                redirect('/Hastalar/');
            }

            if($cevapkayit and $hastakayit){
                Session::flash('durum',1);
                return redirect('/Hastalar/');
            }else{
                Session::flash('durum',2);
                return back();
            }

        //return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detay=Patient::where('id',$id);
        return $detay;
        //return view('front.partials.hasta.detay',compact('detay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hasta=Patient::find($id);
        $hastaneler=hospital::where('durum','=','1')->get();
        $cevaplar=Cevaplar::all();
        $sonuclar=hasta_hastane_cevap::where('hasta_id',$id)->get();
        $user=Auth::user()->id;
        return view('front.partials.hasta.edit',compact('hasta','hastaneler','cevaplar','sonuclar','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientsRequest $request, $id)
    {
        $hasta_kayit=Patient::find($id)->update($request->all());



        $kategori_id = $request->input('kategori');
        $h_sonuc = $request->input('hastane');

        $cevapdata= [];
        foreach ($h_sonuc as $key => $value) {
            $cevapdata= [
                'hasta_id' => $id,
                'hastane_id' => $key,
                'cevap_id' => $value,
                'kategori_id' => $kategori_id
            ];
            $cevapkayit=hasta_hastane_cevap::where('hasta_id',$id)
                ->where('hastane_id',$key)
                ->update($cevapdata);
        }

        if($cevapkayit and $hasta_kayit){
            Session::flash('durum',1);
            return back();
        }else{
            Session::flash('durum',2);
            return back();
        }


        // redirect('/Hastalar/');

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

    public function akis($id){

        $hasta=Patient::find($id);
        $user=Auth::user()->id;
        $akislar=Time::where('patient_id',$id)->orderBy('created_at', 'dsc')->get();
        $dt = Carbon::now();

        $time=$dt->toTimeString();
        $belgeler=Upload::where('patient_id',$id)->get();

        $hastaneler=hospital::where('durum','=','1')->get();
        $cevaplar=Cevaplar::all();
        $sonuclar=hasta_hastane_cevap::where('hasta_id',$id)->get();

      return view('front.partials.hasta.akis',compact('hasta','user','akislar','time','belgeler','hastaneler','cevaplar','sonuclar'));
    }

    public function akiskayit(Request $request, $id){

        $kayit=Time::create($request->all());
        if($kayit) {
            Session::flash('durum', 1);
            return back();
        }else{
            Session::flash('durum', 2);
            return back();
        }
        //return $request->all();
    }
    public function akislar(){

       $kayitlar=Time::create($request->all());
        //return $request->all();

    }

    public function akisdelete($id){
        $kullanici=Auth::user()->id;

        $sor=Time::find($id)->user_id;

        if($kullanici==$sor){
        $delete=Time::find($id)->delete();
            if($delete) {
                Session::flash('durum', 1);
                return back();
            }else{
                Session::flash('durum', 2);
                return back();
            }
        }else{
            Session::flash('durum', 3);
            return back();
        }

    }

    public function sonuc(Request $request, $id){

        $sonuc=$request->all();
        $bitis_tarih=Carbon::now();
        $sorgula=Patient::where('id',$id);
        $sil    =Patient::where('id',$id)->update(['durum'=>null,'olumsuz'=>null,'askom'=>null]);
        $kayit  =Patient::where('id',$id)->update($sonuc);

        if($sil or $kayit){
            Session::flash('durum',1);
            return back();
        }else{
            Session::flash('durum',2);
            return back();
        }
        }

    public function askom()
    {
        $yhastalar=Patient::where('kategori','1')->where('askom','askom')->paginate(10);
        $phastalar=Patient::where('kategori','2')->where('askom','askom')->paginate(10);
        $ehastalar=Patient::where('kategori','3')->where('askom','askom')->paginate(10);


        return view('front.partials.hasta.askom',compact('yhastalar','phastalar','ehastalar'));
    }

    public function sonlanmis()
    {
        $yhastalar=Patient::where('kategori','1')->where('durum','sonlandi')->paginate(10);
        $phastalar=Patient::where('kategori','2')->where('durum','sonlandi')->paginate(10);
        $ehastalar=Patient::where('kategori','3')->where('durum','sonlandi')->paginate(10);


        return view('front.partials.hasta.sonlananlar',compact('yhastalar','phastalar','ehastalar'));
    }

    public function ara(Request $request)
    {

        $key = $request->input('key');

        $veriler=Patient::where('hasta_adi','LIKE', '%'.$key.'%')->get();
        return view('front.partials.hasta.ara',compact('veriler'));
    }

    public function belgedelete($id){

        $belge=Upload::find($id)->orginal_filename;
        $path = public_path() . "/uploads/" .$belge;
        unlink($path);
        $delete=Upload::find($id)->delete();

        if($delete) {
            Session::flash('durum', 1);
            return back();
        }else{
            Session::flash('durum', 2);
            return back();
        }

    }

    public function hastaneakis(Request $request)
    {

        //$h_sonuc = $request->input('hastane');
        $hastaneler = $request->input('hastane');
        $kategori_id = $request->input('kategori');
        $hasta_id = $request->input('hasta_id');

        $cevapdata[] = [];
        foreach ($hastaneler as $key => $value) {
            $cevapdata = [
                'hasta_id' => $hasta_id,
                'hastane_id' => $key,
                'cevap_id' => $value,
                'kategori_id' => $kategori_id
            ];
            $cevapkayit=hasta_hastane_cevap::where('hasta_id',$hasta_id)
                ->where('hastane_id',$key)
                ->update($cevapdata);

        }

        if($cevapkayit){
            Session::flash('durum',1);
            return back();
        }else{
            Session::flash('durum',2);
            return back();
        }




        // redirect('/Hastalar/');

    }

    public function pdfyaz($id){
        $hasta=Patient::find($id);
        $user=Auth::user()->id;
        $akislar=Time::where('patient_id',$id)->orderBy('time', 'dsc')->get();
        $dt = Carbon::now();

        $time=$dt->toTimeString();
        $belgeler=Upload::where('patient_id',$id)->get();

        $hastaneler=hospital::where('durum','=','1')->get();
        $cevaplar=Cevaplar::all();
        $sonuclar=hasta_hastane_cevap::where('hasta_id',$id)->get();

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Tahoma']);

        $pdf = PDF::loadView('pdf.invoice',
            [
                'hasta'=>$hasta,
                'user'=>$user,
                'akislar'=>$akislar,
                'hastaneler'=>$hastaneler,
                'cevaplar'=>$cevaplar,
                'sonuclar'=>$sonuclar,
            ]
        );


        return $pdf->download($hasta->hasta_adi.'.pdf');
    }


}
