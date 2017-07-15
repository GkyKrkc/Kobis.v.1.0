@extends('front.partials.master')

@section('content')

        <div class="row">
            <h1>Site Ayarları</h1>
            <div class="col-md-12">



                    {!! Form::open(["url"=>"/Ayarlar/guncelle","method"=>"put"])!!}
                        @foreach($ayarlar as $ayar)
                            {!! Form::bsText($ayar->name,trans("formlar.".$ayar->name),$ayar->value)!!}
                        @endforeach
                        {!! Form::bsSubmit("Kaydet") !!}
                    {!! Form::close() !!}



            </div>
        </div>
@endsection
