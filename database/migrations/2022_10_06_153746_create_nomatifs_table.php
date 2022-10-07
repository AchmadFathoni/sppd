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
        Schema::create('nomatifs', function (Blueprint $table) {
            $table->string('kegiatan', 32)->primary();
            $table->string('tujuan', 64);
            $table->date('berangkat');
            $table->date('kembali');
            $table->string('keterangan', 64);
            $table->string('status', 4);
            $table->foreign('status')->references('id')->on('statuses');
            $table->unsignedbigInteger('PPK');
            $table->foreign('PPK')->references('NIP')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomatifs');
    }
};
