<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location_name')->unique();
            $table->string('location_slug');
            $table->string('location_desc');
            $table->string('location_address');
            $table->string('location_content');
            $table->string('location_review');
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
        Schema::dropIfExists('location_images');
    }
}
