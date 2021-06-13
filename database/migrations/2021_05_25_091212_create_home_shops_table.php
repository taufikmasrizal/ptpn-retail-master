<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_shops', function (Blueprint $table) {
            $table->id();
            $table->string('image_background');
            $table->string('title_en');
            $table->string('title_idn');
            $table->text('content_en');
            $table->text('content_idn');
            $table->text('available');
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
        Schema::dropIfExists('home_shops');
    }
}
