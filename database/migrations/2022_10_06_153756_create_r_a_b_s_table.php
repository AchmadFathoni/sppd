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
        Schema::create('r_a_b_s', function (Blueprint $table) {
            $table->string('nomatif', 32)->primary();
            $table->foreign('nomatif')->references('kegiatan')->on('nomatifs');
            $table->unsignedTinyInteger('tipe');
            $table->foreign('tipe')->references('id')->on('sub__r_a_b_s');
            $table->text('keterangan');
            $table->unsignedsmallInteger('jumlah_1');
            $table->string('unit_1', 8);
            $table->unsignedsmallInteger('jumlah_2');
            $table->string('unit_2', 8);
            $table->unsignedInteger('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_a_b_s');
    }
};
