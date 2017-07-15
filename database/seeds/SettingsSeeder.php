<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Yazılımın Asıl Amacı Komuta Kontrol Merkezlerinde Kullanılan Manuel Takip Formlarını Dijital Formatlara Dönüştürüp Geriye Dönük Sistem İstatistiği ve Veri Tabanı Oluşturmaktır.
        Setting::create(["name"=>"baslik","value"=>"112 KOBİS(Komuta Bilgi Sistemi)"]);
        Setting::create(["name"=>"author","value"=>"Gökay KARAKOÇ"]);
        Setting::create(["name"=>"aciklama","value"=>"Bu Yazılım Gökay KARAKOÇ Tarafından 112 Komuta Kontrol Merkezleri İçin Tasarlandı."]);
        Setting::create(["name"=>"keywords","value"=>"112 Acil Sağlık Sistemi, 112 Komuta Kontrol Merkezi, KOBiS,Yoğunbakım Hasta ve Hastane Takip Sistemi"]);
        Setting::create(["name"=>"telefon ","value"=>"0344 228 82 00"]);
        Setting::create(["name"=>"fax","value"=>"0344 221 01 73"]);
        Setting::create(["name"=>"adres","value"=>"Kahramanmaraş İl Sağlık Müdürlüğü"]);
        Setting::create(["name"=>"email","value"=>"Kahramanmaraş İl Sağlık Müdürlüğü"]);
    }
}
