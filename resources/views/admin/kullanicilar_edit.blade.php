@extends('front.partials.master')

@section('content')

    <div class="row">
        <h1>Kullanıcı Ayarları</h1>
        <div class="col-md-12">



            {!! Form::model($user,["route"=>["Uyeler.update",$user->id],"method"=>"put"])!!}

            {!! Form::bsCheckbox("rol","Yetkiler",[
                ["value"=>1,"yetki"=>"Admin","is_checked"=>$user->yetkisi_var_mi("admin")],
                ["value"=>2,"yetki"=>"Doktor","is_checked"=>$user->yetkisi_var_mi("doktor")],
                ["value"=>3,"yetki"=>"Supervizor","is_checked"=>$user->yetkisi_var_mi("supervizor")],
                ["value"=>4,"yetki"=>"Koordinasyon","is_checked"=>$user->yetkisi_var_mi("koordinasyon")],
                ["value"=>5,"yetki"=>"Cagri","is_checked"=>$user->yetkisi_var_mi("cagri")]
            ]) !!}

            {!! Form::bsText("name","isim")!!}
            {!! Form::bsText("email","E-Mail")!!}
            {!! Form::bsPassword("password","Parola")!!}

            {!! Form::bsSubmit("Kaydet") !!}
            {!! Form::close() !!}



        </div>
    </div>
@endsection
