<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakananIndonesiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanan_indonesias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('nama_makanan');
            $table->string('asal_daerah');
            $table->string('deskripsi',10000);
            $table->string('foto_makanan');
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
        Schema::dropIfExists('makanan_indonesias');
    }
}
