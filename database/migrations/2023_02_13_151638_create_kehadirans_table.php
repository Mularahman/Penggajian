<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiransTable extends Migration
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
            $table->timestamps();
            $table->foreignId('absensi_id');
            $table->foreignId('potongan_id');
            $table->integer('jumlah');

            $table->foreign('absensi_id')->references('id')->on('absensis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('potongan_id')->references('id')->on('potongans')->onDelete('cascade')->onUpdate('cascade');
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
}
