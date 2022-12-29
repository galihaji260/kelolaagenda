<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->date('tanggal');
            $table->unsignedBigInteger('pic_id');
            $table->unsignedBigInteger('pengisi_id')->nullable();
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('divisi_id'); 
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('tempat');
            $table->integer('anggaran');
            $table->integer('realisasi_anggaran');

      
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
        Schema::dropIfExists('agendas');
    }
};
