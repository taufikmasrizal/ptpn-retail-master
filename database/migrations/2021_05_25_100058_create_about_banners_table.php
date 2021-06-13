<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_banners', function (Blueprint $table) {
            $table->id();
            $table->string('image_logo');
            $table->string('title_en');
            $table->string('title_idn');
            $table->string('image_background');
            $table->string('image_float_item1');
            $table->string('image_float_item2');
            $table->string('image_float_item3');
            $table->string('image_float_item4');
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
        Schema::dropIfExists('about_banners');
    }
}
