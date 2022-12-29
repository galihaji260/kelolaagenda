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
        Schema::table('agendas', function (Blueprint $table) {
            $table->foreign('pic_id')->references('id')->on('personal_data');
            $table->foreign('pengisi_id')->references('id')->on('personal_data');
            $table->foreign('jenis_id')->references('id')->on('jenis_agendas');
            $table->foreign('status_id')->references('id')->on('status_kegiatans');
            $table->foreign('divisi_id')->references('id')->on('divisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendas', function (Blueprint $table) {
            //
        });
    }
};
