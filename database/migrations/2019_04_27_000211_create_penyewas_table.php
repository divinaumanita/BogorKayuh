<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->string('nama_pengguna',191)->unique;
            $table->string('kata_sandi',255);
            $table->string('nama',255);
            $table->string('no_telepon',20);
            $table->string('email',191);
            $table->string('alamat',255);
            $table->timestamps();
           
            $table->primary('email');
            

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewas');
    }
}
