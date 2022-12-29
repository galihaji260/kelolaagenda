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
        Schema::create('notulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personaldata_id');
            $table->date('tanggal');
            $table->string('judul');
            $table->string('peserta');
            $table->longtext('konten');
            
            $table->foreign('personaldata_id')->references('id')->on('personal_data');
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
        Schema::dropIfExists('notulas');
    }
};
