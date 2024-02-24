<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis', 50);
            $table->bigInteger('id_user');
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->bigInteger('kelas_id')->nullable();
            $table->bigInteger('jurusan_id')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
