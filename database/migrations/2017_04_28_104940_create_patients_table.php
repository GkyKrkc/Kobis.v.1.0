<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('baslama_tarih');
            $table->dateTime('bitis_tarih')->nullable();
            $table->string('mernis_no');
            $table->string('hasta_adi');
            $table->string('uyruk');
            $table->integer('kategori');
            $table->integer('basamak');
            $table->string('yas');
            $table->string('gun');
            $table->integer('il_durum');
            $table->integer('user_id');
            $table->text('aciklama');
            $table->string('durum')->nullable();
            $table->string('olumsuz')->nullable();
            $table->string('askom')->nullable();
            $table->string('_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
