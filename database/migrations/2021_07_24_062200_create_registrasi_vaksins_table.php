<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_vaksins', function (Blueprint $table) {
            $table->integer('nik', 16)->unique();
            $table->string('nama', 50);
            $table->date('lahir');
            $table->string('kelamin');
            $table->string('nohp');
            $table->string('kategori');
            $table->string('tempat');
            $table->string('alamat');
            $table->date('jadwal');
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
        Schema::dropIfExists('registrasi_vaksins');
    }
}
