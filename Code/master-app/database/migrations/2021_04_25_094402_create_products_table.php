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
            $table->string('product_name');
            $table->string('product_img');
            $table->string('product_price');
            $table->string('sale_price')->nullable();
            $table->longText('product_description');
            $table->string('product_qty');
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('gift_id');
            $table->timestamps();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gift_id')->references('id')->on('gifts')->onUpdate('cascade')->onDelete('cascade');
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
