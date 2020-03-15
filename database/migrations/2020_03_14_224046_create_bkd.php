<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBkd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bkd', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama')->nullable();
            $table->string('jk')->nullable();
            $table->string('golongan')->nullable();
            $table->string('jabatan_fungsional')->nullable();
            $table->string('eselon')->nullable();
            $table->string('jabatan_terakhir')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            $table->string('jurusan_pendidikan')->nullable();
            $table->string('pd')->nullable();
            $table->string('instansi')->nullable();
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
        Schema::dropIfExists('bkd');
    }
}
