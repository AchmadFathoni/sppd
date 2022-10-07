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
        Schema::create('r_r_b_s', function (Blueprint $table) {
            $table->string('nomatif', 32)->primary();
            $table->foreign('nomatif')->references('kegiatan')->on('nomatifs');
            $table->text('uraian');
            $table->text('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_r_b_s');
    }
};
