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
        Schema::create('tb_proker', function (Blueprint $table) {
            // $table->id('id_proker');
            // $table->string('nama_proker');
            // $table->varchar('waktu_pelaksanaan');
            // $table->int('anggaran');
            // $table->sstring('deskripsi_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_proker');
    }
};
