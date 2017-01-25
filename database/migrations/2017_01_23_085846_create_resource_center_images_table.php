<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceCenterImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_center_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name')->unique();
            $table->string('slug')->unique();
            $table->string('category_name');
            $table->string('image_extension', 10);
            $table->text('download');
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
        Schema::drop('resource_center_images');
    }
}
