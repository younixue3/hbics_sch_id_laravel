<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailboxSentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailbox_sents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mailbox');
            $table->foreign('mailbox')->references('id')->on('mailbox');
            $table->unsignedBigInteger('sent');
            $table->foreign('sent')->references('id')->on('sents');
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
        Schema::dropIfExists('mailbox_sents');
    }
}
