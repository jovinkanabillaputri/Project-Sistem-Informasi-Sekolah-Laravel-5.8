<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mapel', 50);
            $table->string('hari', 20);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            // $table->bigInteger('guru_id');
            $table->bigInteger('kelas_id');
            $table->bigInteger('jurusan_id');
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
        Schema::dropIfExists('mapel');
    }
}
