<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_title')->unique();
            $table->string('slug');
            $table->text('news_description');
            $table->string('date');
            $table->string('time');
            $table->text('location');
            $table->string('contact');
            $table->string('image_extension', 10);
            $table->string('image_name')->unique();
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
        Schema::dropIfExists('latest_news');
    }
}
