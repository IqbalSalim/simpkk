<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50);
            $table->integer('jumlah_AK');
            $table->integer('jumlah_KK');
            $table->integer('balita');
            $table->integer('pus');
            $table->integer('wus');
            $table->integer('buta');
            $table->integer('ibu_hamil');
            $table->integer('ibu_menyusui');
            $table->integer('lansia');
            $table->string('makanan_pokok');
            $table->string('jamban_keluarga');
            $table->string('sumber_air');
            $table->string('pembuangan_sampah');
            $table->string('pembuangan_air_limbah');
            $table->string('stiker_pkk');
            $table->string('kriteria_rumah');
            $table->string('up2k');
            $table->string('usaha_kesehatan_lingkungan');
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
        Schema::dropIfExists('keluargas');
    }
}
