<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestReviewSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_review_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name')->unique();
            $table->string('slug')->unique();
            $table->string('author');
            $table->string('book_description');
            $table->string('book_review');
            $table->string('library_name');
            $table->string('library_address');
            $table->string('library_contact');
            $table->string('image_name')->unique();
            $table->string('image_extension', 10);
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
        Schema::dropIfExists('latest_review_sliders');
    }
}
