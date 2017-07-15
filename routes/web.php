<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Patient;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('front.index');
});
Auth::routes();

Route::get('/Sorgu',function(){


});
/*
Route::group(["middleware"=>["admin"]],function(){

    Route::group(["namespace"=>"Admin"],function (){
        Route::get("/Ayarlar","SettingsController@index");
        Route::put("/Ayarlar/guncelle","SettingsController@guncelle");
        Route::resource('Uyeler','KullanicilarController');
        Route::resource('Hastaneler','HospitalsController');
    });
});
*/

Route::group(["middleware" => ["admin_mi","auth"]],function(){

    // Buraya tanımlayacağın her route hem admin hem yazarın ortak yetkili olduğu sayfalar
    Route::get("/Ayarlar","SettingsController@index");
    Route::put("/Ayarlar/guncelle","SettingsController@guncelle");
    Route::resource('Uyeler','KullanicilarController');
    Route::resource('Hastaneler','HospitalsController');
    Route::resource('Cevaplar','CevapController');

    Route::get('Askom/','PatientsController@askom');
    Route::resource('Hastalar/create','PatientsController');
    Route::get('Akis/{id?}', 'PatientsController@akis');
    Route::post('Akis/Kayit/{id}','PatientsController@akiskayit' );
    Route::get('Akis/Sil/{id}','PatientsController@akisdelete');
    Route::post('Belge/{id}','UploadController@upload');
    Route::get('Belge/Sil/{id}','PatientsController@belgedelete');
    Route::get('Sonlananlar/','PatientsController@sonlanmis');
    Route::post('Sonuc/{id}','PatientsController@sonuc');
    Route::post('HastaAra/','PatientsController@ara');
    Route::get('Sevkler/','PatientsController@index');
    Route::resource('Ara/','SearchController');
    Route::get('Yaz/{id}','PatientsController@pdfyaz');
});

Route::group(["middleware" => ["auth","doktor_mu"]],function(){

    // Buraya tanımlayacağın her route sadece doktor'un yetkili olduğu sayfalar
    Route::get('Askom/','PatientsController@askom');
    Route::resource('Cevaplar','CevapController');
    Route::resource('Ara/','SearchController');
});

Route::group(["middleware" => ["auth","doktor_mu","koordinasyon"]],function(){

    // Buraya tanımlayacağın her route sadece doktor'un yetkili olduğu sayfalar
    Route::get('Askom/','PatientsController@askom');
    Route::get('HastaEkle','PatientsController@create');
    Route::resource('Hastalar','PatientsController');
    Route::get('Akis/{id?}', 'PatientsController@akis');
    Route::post('Akis/Kayit/{id}','PatientsController@akiskayit' );
    Route::get('Akis/Sil/{id}','PatientsController@akisdelete');
    Route::post('Belge/{id}','UploadController@upload');
    Route::get('Belge/Sil/{id}','PatientsController@belgedelete');
    Route::get('Sonlananlar/','PatientsController@sonlanmis');
    Route::post('Sonuc/{id}','PatientsController@sonuc');
    Route::post('HastaAra/','PatientsController@ara');
    Route::get('Sevkler/','PatientsController@index');
    Route::resource('Cevaplar','CevapController');
    Route::resource('Ara/','SearchController');
});

Route::group(["middleware" => ["auth","koordinasyon"]],function(){

    // Buraya tanımlayacağın her route sadece Koordinasyon'un yetkili olduğu sayfalar

    Route::get('HastaEkle','PatientsController@create');
    Route::get('Akis/{id?}', 'PatientsController@akis');
    Route::put('Akis/Hastane/', 'PatientsController@hastaneakis');
    Route::post('Akis/Kayit/{id}','PatientsController@akiskayit' );
    Route::get('Akis/Sil/{id}','PatientsController@akisdelete');
    Route::post('Belge/{id}','UploadController@upload');
    Route::get('Belge/Sil/{id}','PatientsController@belgedelete');
    Route::get('Sonlananlar/','PatientsController@sonlanmis');
    Route::post('Sonuc/{id}','PatientsController@sonuc');
    Route::post('HastaAra/','PatientsController@ara');
    Route::get('Sevkler/','PatientsController@index');
    Route::resource('Ara/','SearchController');
    Route::resource('Cevaplar','CevapController');
});









//Route::get('/logout', 'Auth\AuthController@getLogout');
