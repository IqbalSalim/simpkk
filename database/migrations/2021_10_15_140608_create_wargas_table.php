<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_dasawisma');
            $table->string('nama_krt');
            $table->bigInteger('no_reg');
            $table->string('nik', 50);
            $table->string('akseptor_kb');
            $table->string('kegiatan_posyandu');
            $table->string('program_bkb');
            $table->string('tabungan');
            $table->string('kelompok_belajar');
            $table->string('paud');
            $table->string('kegiatan_koperasi');
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
        Schema::dropIfExists('wargas');
    }
}
