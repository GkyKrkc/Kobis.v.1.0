<?php

use Illuminate\Database\Seeder;

class Hospitals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Kahramanmaraş Sütçü İmam Üniversitesi',
            'hastane_nick'=>'KSÜ',
            'hastane_basamak'=>'3',
            'hastane_kategori'=>'2',
            'hastane_detay'=>'Hastane Detay',
            'durum'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Necip Fazıl Şehir Hastanesi',
            'hastane_nick'=>'NFŞH',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'durum'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Necip Fazıl Şehir Hastanesi Kadın Doğum Ve Çocuk Hastanesi Ek Hizmet Binası',
            'hastane_nick'=>'NFŞH-KDÇH',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'durum'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Necip Fazıl Şehir Hastanesi Yörük Selim Ek Hizmet Binası',
            'hastane_nick'=>'NFŞH-YS',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'durum'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Afşin İlçe Devlet Hastanesi',
            'hastane_nick'=>'AFŞİN',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'durum'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Andırın İlçe Devlet Hastanesi',
            'hastane_nick'=>'ANDIRIN',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Çağlayancerit İlçe Devlet Hastanesi',
            'hastane_nick'=>'Ç.CERİT',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Ekinözü İlçe Devlet Hastanesi',
            'hastane_nick'=>'EKİNÖZÜ',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Elbistan İlçe Devlet Hastanesi',
            'hastane_nick'=>'ELBİSTAN',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Nurhak İlçe Devlet Hastanesi',
            'hastane_nick'=>'NURHAK',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Pazarcık İlçe Devlet Hastanesi',
            'hastane_nick'=>'PAZARCIK',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Türkoğlu İlçe Devlet Hastanesi',
            'hastane_nick'=>'TFTR',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'1',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Devakent Hastanesi',
            'hastane_nick'=>'DEVAKENT',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Hayat Hastanesi',
            'hastane_nick'=>'HAYAT',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Markasi Hastanesi',
            'hastane_nick'=>'MARKASİ',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Megapark Hastanesi',
            'hastane_nick'=>'MEGAPARK',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Marashlife Hastanesi',
            'hastane_nick'=>'MARASHLİFE',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Sular Vatan Hastanesi',
            'hastane_nick'=>'VATAN',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();

        $hastaneler= new \App\hospital([
            'hastane_adi'=>'Özel Elbistan Yaşam Hastanesi',
            'hastane_nick'=>'YAŞAM',
            'hastane_basamak'=>'2',
            'hastane_kategori'=>'3',
            'hastane_detay'=>'Hastane Detay',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $hastaneler->save();
    }
}
