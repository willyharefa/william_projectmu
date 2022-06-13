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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('name_class');
            $table->integer('agama');
            $table->integer('pkn');
            $table->integer('bindo');
            $table->integer('bingg');
            $table->integer('mtk');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('sbd');
            $table->integer('pjok');
            $table->integer('tik');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
};
