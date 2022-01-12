<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->bigIncrements('kota_id');
            $table->unsignedBigInteger('provinsi_id'); 
            $table->string('nama_kota');
            $table->string('kode_pos');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('provinsi_id')->on('provinsi') 
            ->onUpdate('CASCADE')
            ->unDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
