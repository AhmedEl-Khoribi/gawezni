<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username'); 
            $table->string('phone')->unique();
            $table->enum('gender', ['male', 'female']);   
            $table->text('main_description');
            $table->integer('city_id')->unsigned();
            $table->text('other_person_description');
            $table->date('dob');
            $table->enum('marraige_status', ['first', 'second', 'third', 'fourth'])->nullable();
            $table->enum('social_status', ['single', 'married', 'divorced', 'willow']);
            $table->tinyInteger('children_number');
            $table->string('weight');
            $table->string('height');
            $table->enum('skin_color', ['white', 'black', 'dark_brown', 'brown', '7enty_dark', '7enty_white']);
            $table->enum('physique', ['thin', 'medium_thin', 'sporty', 'fat', 'huge']);
            $table->enum('education', ['medium_school', 'high_school', 'university', 'PHD', 'self_study']);
            $table->enum('financial_status', ['poor', 'lower_than_medium', 'medium', 'more_than_medium', 'good', 'mastora', 'rich']);            
            $table->string('health_details');
            $table->string('career_field');
            $table->string('job');
            $table->string('salary');
            $table->enum('online', ['online', 'offline'])->default('online');
            $table->string('image'); 
            $table->enum('approved', ['approved', 'not_approved'])->default('not_approved');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('city_id')
                  ->references('id')
                  ->on('cities')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
