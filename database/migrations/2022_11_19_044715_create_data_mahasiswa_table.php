<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * table = data_mahasiswa
         * colom = nama, nim, alamat, program_studi, semester
         */
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // created_at sama update_at
            $table->string('nama', 100);
            $table->integer('nim');
            $table->text('alamat');
            $table->string('program_studi', 100);
            $table->integer('semester');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_mahasiswa');
    }
};
