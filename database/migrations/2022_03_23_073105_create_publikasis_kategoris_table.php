<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasisKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasis_kategoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publikasi');
            $table->foreign('publikasi')->references('id')->on('publikasis');
            $table->unsignedBigInteger('kategori');
            $table->foreign('kategori')->references('id')->on('kategoris');
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
        Schema::dropIfExists('publikasis_kategoris');
    }
}
