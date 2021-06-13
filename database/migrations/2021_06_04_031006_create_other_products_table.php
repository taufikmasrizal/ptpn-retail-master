<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('category_products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title_en');
            $table->string('title_idn');
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
        Schema::dropIfExists('other_products');
    }
}
