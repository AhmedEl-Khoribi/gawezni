<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->enum('read', ['seen', 'unseen'])->default('unseen');
            $table->longText('body');
            $table->foreign('sender_id')
                  ->references('id')
                  ->on('clients')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('receiver_id')
                  ->references('id')
                  ->on('clients')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('mails');
    }
}
