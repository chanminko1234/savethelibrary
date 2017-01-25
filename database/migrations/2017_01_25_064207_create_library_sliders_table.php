<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrarySlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('library_name');
            $table->string('library_slug');
            $table->string('library_address');
            $table->string('library_contact');
            $table->text('library_description');
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
        Schema::dropIfExists('library_sliders');
    }
}
