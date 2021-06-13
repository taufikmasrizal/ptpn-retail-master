<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeQualityProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_quality_products', function (Blueprint $table) {
            $table->id();
            $table->string('image_background1');
            $table->string('image_background2');
            $table->string('image_background3');
            $table->string('title_en');
            $table->string('title_idn');
            $table->text('content_en');
            $table->text('content_idn');
            $table->string('link');
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
        Schema::dropIfExists('home_quality_products');
    }
}
