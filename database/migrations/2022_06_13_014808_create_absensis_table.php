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
        Schema::create('absensis', function (Blueprint $table) {
            
            $table->id();
            $table->string('name_student');
            $table->string('name_class');
            $table->unsignedBigInteger('mapel_id');
            $table->enum('time_in', ['H', 'S', 'I', 'A']);
            $table->enum('time_out', ['H', 'S', 'I', 'A']);
            $table->string('name_teacher');
            $table->date('date_absent');
            $table->timestamps();

            // $table->foreign('kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('mapel_id')->references('id')->on('mapels')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
};
