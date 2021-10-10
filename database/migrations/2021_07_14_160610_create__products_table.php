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
        $table->string('name',100);
        $table->double('price')->unsigned();
        $table->double('sale_price')->nullable()->default(0);
        $table->string('image');
        $table->tinyInteger('status')->default(0);
        $table->bigInteger('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->bigInteger('classify_id')->unsigned();
        $table->foreign('classify_id')->references('id')->on('classifies');
        $table->longText('description')->nullable()->default('text');
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
        Schema::dropIfExists('_products');
    }
}
