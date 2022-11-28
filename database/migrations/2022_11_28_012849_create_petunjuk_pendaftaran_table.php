<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetunjukPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petunjuk_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['hhk', 'sd', 'smp', 'sma']);
            $table->string('judul', 180);
            $table->string('isi', 280);
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
        Schema::dropIfExists('petunjuk_pendaftaran');
    }
}
