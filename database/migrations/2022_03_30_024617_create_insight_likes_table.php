<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsightLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insight_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publikasi');
            $table->foreign('publikasi')->references('id')->on('publikasis');
            $table->unsignedBigInteger('user');
            $table->foreign('user')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insight_likes');
    }
}
