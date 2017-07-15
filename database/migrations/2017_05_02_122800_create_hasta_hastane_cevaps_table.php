<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHastaHastaneCevapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasta_hastane_cevaps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hasta_id');
            $table->integer('hastane_id');
            $table->integer('cevap_id');
            $table->integer('kategori_id');
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
        Schema::dropIfExists('hasta_hastane_cevaps');
    }
}
