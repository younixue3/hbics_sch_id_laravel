<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasisContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasis_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publikasi');
            $table->foreign('publikasi')->references('id')->on('publikasis');
            $table->unsignedBigInteger('content');
            $table->foreign('content')->references('id')->on('contents');
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
        Schema::dropIfExists('publikasis_contents');
    }
}
