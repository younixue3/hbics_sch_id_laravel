<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsAudiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_audiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event');
            $table->foreign('event')->references('id')->on('events');
            $table->unsignedBigInteger('audience');
            $table->foreign('audience')->references('id')->on('audiences');
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
        Schema::dropIfExists('events_audiences');
    }
}
