<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function(Blueprint $table){
            $table->increments('anggota_id');
            $table->string('anggota_nama', 50);
            $table->string('anggota_alamat', 50);
            $table->string('anggota_jk', 20);
            $table->string('anggota_telp', 20 );
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
        Schema::dropIfExist('anggota');
    }
}
