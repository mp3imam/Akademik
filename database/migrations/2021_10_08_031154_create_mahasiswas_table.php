<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 75);
            $table->date('tgl_lahir');
            $table->unsignedBigInteger('fakultas_id');
            $table->unsignedBigInteger('program_studis_id');
            $table->string('telp', 20);
            $table->text('alamat');
            $table->timestamps();

            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
            $table->foreign('program_studis_id')->references('id')->on('program_studis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
