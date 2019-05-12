<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepedas', function (Blueprint $table) {
            $table->string('no_sepeda',191);
            $table->string('jenissepeda',255);
            $table->string('jumlahsepeda',255);
            $table->timestamps();
            $table->primary('no_sepeda');
            //$table->foreign('id_sewa')->references('id_penyewaan')->on('penyewaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sepedas');
    }
}
