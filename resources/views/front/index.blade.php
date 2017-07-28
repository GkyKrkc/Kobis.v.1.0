@extends('front.partials.master')
@section('content')
    <!-- Page Content -->



        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-12">

                <div>
                    <a href="HastaEkle" class="btn btn-danger btn-block"><i class="fa fa-plus"></i> Yeni Kayıt</a>

                </div>

            </div>

        </div>

        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Komuta Bilgi Sistemi KOBİS 112 Komuta Merkezlerindeki Hasta Sevk formlarını kayıt altına alan ve raporlayan bir sistemdir. Sistem ilk etapta sadece Sevk koordinasyon birimine hitap edecek olup, yazılımın sonraki versiyonlarında 112 Komuta Merkezlerinin dijital form ihtiyaçlarının karşılanması ve böylelikle gereksiz kağıt ve zaman israfının önüne geçilmesi düşünülmektedir.</p>
                    <span>KOBİS v.2.0'da Planlananlar</span>
                    <ul>
                        <li>Kayıtların Hastane Tarafından Otomatik Gelmesi </li>
                        <li>Süpervizör (Çağrı Yönlendiriciler İçin)Hatırlatma Paneli </li>
                        <li>Duyurular Paneli </li>
                        <li>Adli Tabip Nöbetci Listesi </li>
                        <li>ASKOM Kararları </li>
                        <li>Online Ambulans Değişim Formu </li>
                        <li>Olağan Dışı Durum Formu (Kayıtları Mail Olarak SAKOM'a Gönderme) </li>
                        <li>Ekip Ve Bölgeler</li>
                        <li>Kalite Formları</li>
                        <li>Online Tutanak Yazma</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">İletişim: +90 546 499 90 95</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Desing and Coder &copy; {!! config("ayarlar.author") !!} 2017</p>
                </div>
            </div>
        </footer>

    <!-- /.container -->
@endsection