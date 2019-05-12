<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaans', function (Blueprint $table) {
                $table->string('id_penyewaan',191);
                $table->time('waktu_mulai');
                $table->time('waktu_maks');
                $table->time('waktu_now');
                $table->integer('durasi');
                $table->integer('jumlah');
                $table->string('nosepeda')->nullable();
                $table->string('jenis')->nullable();
                $table->integer('denda')->nullable();
                $table->integer('bayar')->nullable();
                $table->string('status')->nullable();
                $table->string ('emailn',191)->nullable();
    
                
                $table->timestamps();
                
                
                $table->primary('id_penyewaan');
                $table->foreign('emailn')->references('email')->on('penyewas');
                $table->foreign('nosepeda')->references('no_sepeda')->on('sepedas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaans');
    }
}
