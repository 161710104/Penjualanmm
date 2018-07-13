<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('mobil_id')->unique();
            $table->foreign('mobil_id')->references('id')->on('mobils')->ondelete('cascade');
            $table->string('varian');
            $table->string('tahun_keluar');
            $table->integer('cakupan_mesin');
            $table->string('transmisi');
            $table->integer('penumpang');
            $table->integer('kilometer');
            $table->string('warna');
            $table->integer('harga');
            $table->longText('deskripsi');    
            $table->UnsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('detail_mobils');
    }
}
