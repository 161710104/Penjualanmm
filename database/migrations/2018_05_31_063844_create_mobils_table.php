<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar');
            $table->string('nama');
            $table->UnsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->ondelete('cascade');
            $table->UnsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
            $table->string('model');
            $table->string('lokasi');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->boolean('status')->default(false);
            $table->boolean('statuss')->default(false);
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('mobils');
    }
}
