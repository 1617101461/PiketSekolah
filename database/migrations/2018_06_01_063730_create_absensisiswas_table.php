<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensisiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->unsignedInteger('id_siswas');
            $table->foreign('id_siswas')->references('id')->on('siswas')->onDelete('CASCADE');
            $table->unsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('CASCADE');
            $table->unsignedInteger('id_petugaspikets');
            $table->foreign('id_petugaspikets')->references('id')->on('petugaspikets')->onDelete('CASCADE');
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
        Schema::dropIfExists('absensisiswas');
    }
}
