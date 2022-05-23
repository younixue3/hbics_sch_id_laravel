<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->text('email');
            $table->text('alamat');
            $table->string('kota_kab', 90);
            $table->string('negara', 90);
            $table->string('telepon', 15);
            $table->string('nama_calon_siswa', 120);
            $table->string('area_kunjungan', 40);
            $table->text('tinkat_pendidikan');
            $table->dateTime('tanggal_kunjungan');
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
        Schema::dropIfExists('kunjungans');
    }
}
