<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarHadirRdksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hadir_rdks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 144);
            $table->string('nip', 144);
            $table->integer('jenis_kelamin');
            $table->string('unit_or_lembaga', 144);
            $table->string('jabatan', 144);
            $table->string('golongan', 144)->nullable();
            $table->string('no_hp', 144);
            $table->integer('kehadiran');
            $table->string('ttd_url', 144);
            $table->boolean('rdk');
            $table->string('no_rek')->nullable();
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
        Schema::dropIfExists('daftar_hadir_rdks');
    }
}
