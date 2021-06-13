<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('category_products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image_logo');
            $table->string('image_product_banner');
            $table->string('image_background_banner');

            $table->string('image_premium_product');
            $table->text('premium_title_en');
            $table->text('premium_title_idn');
            $table->text('premium_content_en');
            $table->text('premium_content_idn');
            
            $table->text('advantage_title_en');
            $table->text('advantage_title_idn');
            $table->text('advantage_content_en');
            $table->text('advantage_content_idn');
            
            $table->text('image_slider');
            
            $table->string('image_product');
            $table->string('image_object_product1');
            $table->string('image_object_product2');
            $table->string('image_object_product3');
            $table->string('title_en');
            $table->string('title_idn');
            $table->text('content_en');
            $table->text('content_idn');
            
            $table->text('composition_en');
            $table->text('composition_idn');

            $table->text('image_nustrition_fact');
            $table->text('image_footer');
            
            $table->text('available');
            
            $table->text('slug');

            $table->string('whatsapp');
            $table->string('title_color');
            $table->string('theme_color');

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
        Schema::dropIfExists('products');
    }
}
