<?php

use App\Cevaplar;
use Illuminate\Database\Seeder;

class CevapDurum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Aranmadı',
            'cevap_detay'=>'Hastanenin Aranmadığı Durumlar',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Sevk Eden Hastane',
            'cevap_detay'=>'Sevk İşlemini Talep Eden Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Kabul Etti',
            'cevap_detay'=>'Sevk İşlemini Kabul Eden Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Kabul Etmedi',
            'cevap_detay'=>'Sevk İşlemini Reddeden Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Yer Yok',
            'cevap_detay'=>'Yeterli Cihaz ve Ekipman Olmasına Rağmen Boş Yatağı Olmayan Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Uzman Yok',
            'cevap_detay'=>'İlgili Uzman Doktoru Olmayan Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Cihaz Ve Ekipman Yok',
            'cevap_detay'=>'Uzman Doktoru ve Boş Yatağı Olmasına Rağmen, Cihaz ve Ekipmanı Olmayan Hastane',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Kendileri Görüşmüş',
            'cevap_detay'=>'Sevki Talep Eden Hastane ile Sevki Kabul Eden Hastanenin 112 Komuta Teyidi İle Yapmış Olduğu Sevkler',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Arandı Açmadı',
            'cevap_detay'=>'İlgili Uzman Doktor ve Yetkiliye Aranmasına Rağmen Cevap Alınamayan Durumlar',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();

        $cevaplar= new Cevaplar([
            'cevap_adi'=>'Ulaşılamadı',
            'cevap_detay'=>'Aranmasına Rağmen Ulaşılamayan Durumlar',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $cevaplar->save();


    }
}
