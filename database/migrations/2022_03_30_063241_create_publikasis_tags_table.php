<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasisTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasis_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publikasi');
            $table->foreign('publikasi')->references('id')->on('publikasis');
            $table->unsignedBigInteger('tag');
            $table->foreign('tag')->references('id')->on('tags');
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
        Schema::dropIfExists('publikasis_tags');
    }
}
