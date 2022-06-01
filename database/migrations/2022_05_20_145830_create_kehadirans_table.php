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
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('siswa_id')->unsigned();
            $table->bigInteger('guru_id')->unsigned();
            $table->bigInteger('mapel_id')->unsigned();
            $table->bigInteger('kelas_id')->unsigned();
            $table->date('waktu_absen');
            $table->timestamps();
            
            // Mengambil foreign key 
            $table->foreign('mapel_id')->references('id')->on('mapels');
            $table->foreign('guru_id')->references('id')->on('gurus');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadirans');
    }
};
