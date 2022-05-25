<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentsStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sents_staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sent');
            $table->foreign('sent')->references('id')->on('sents');
            $table->unsignedBigInteger('staff');
            $table->foreign('staff')->references('id')->on('users');
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
        Schema::dropIfExists('sents_staffs');
    }
}
