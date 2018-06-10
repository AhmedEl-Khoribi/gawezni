<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('logo');
            $table->string('fivicon');
            $table->string('key_words');
            $table->string('description');
            $table->string('author');
            $table->mediumText('term_docx');
            $table->longText('policy');
            $table->longText('website_used');
            $table->text('payment_methods');
            $table->text('footer_about');
            $table->string('fb');
            $table->string('tw');
            $table->string('instagram');
            $table->string('google');
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
        Schema::dropIfExists('site_infos');
    }
}
