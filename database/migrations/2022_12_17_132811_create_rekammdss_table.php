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
        Schema::create('rekammdss', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_pasien')->constrained('pasiens')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal_berobat');
            $table->text('keluhan');
            $table->text('diagnosis');
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
        Schema::dropIfExists('rekammdss');
    }
};
