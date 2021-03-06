<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->bigIncrements('kabupaten_id');
            $table->unsignedBigInteger('provinsi_id'); 
            $table->unsignedBigInteger('kota_id'); 
            $table->string('nama_kabupaten');
            $table->string('kode_pos');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('provinsi_id')->on('provinsi') 
            ->onUpdate('CASCADE')
            ->unDelete('CASCADE');
            $table->foreign('kota_id')->references('kota_id')->on('kota') 
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
        Schema::dropIfExists('kabupaten');
    }
}
