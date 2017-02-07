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
       $table->string('library_name')->unique();

       $table->string('slug')->unique();   
       $table->string('library_address');
       $table->string('library_town');
       $table->string('contact_name');
       $table->string('contact_no');
       $table->string('email');
       $table->string('facebook');
       $table->string('library_location');
       $table->string('date');
       $table->string('library_description');                                              
       $table->string('services');
       $table->string('image_name')->unique();
       $table->string('city_id');
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
