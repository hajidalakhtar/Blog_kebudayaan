<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokohs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('nama_tokoh');
            $table->string('tgl_lahir');
            $table->string('tgl_wafat');
            $table->string('riwayat',10000);
            $table->string('foto_tokoh');
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
        Schema::dropIfExists('tokohs');
    }
}
