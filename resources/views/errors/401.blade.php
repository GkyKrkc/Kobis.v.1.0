@extends('front.partials.master')

@section('content')
    <style>

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>Üzgünüz!</h1>
                    <h2>Bu Sayfayı Görüntüleme Yetkiniz Yok</h2>
                    <div class="error-details">
                        Sistem Yöneticinizden Yetki İsteyiniz
                    </div>
                    <div class="error-actions">
                        <a href="/" class="btn btn-danger btn-Sm"><span class="glyphicon glyphicon-home"></span> Anasayfaya Dönmek İçin Tıklayın ! </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection