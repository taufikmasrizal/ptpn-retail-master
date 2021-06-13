<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeProfileVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_profile_videos', function (Blueprint $table) {
            $table->id();
            $table->string('image_background');
            $table->string('image_logo');
            $table->text('title_en');
            $table->text('title_idn');
            $table->string('link');
            $table->text('content_en');
            $table->text('content_idn');
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
        Schema::dropIfExists('home_profile_videos');
    }
}
