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
            
            $table->string('title');
            $table->string('description')->nullable();
            $table->enum('category', ['Cat A', 'Cat B', 'Cat C']);
            $table->string('SKU')->nullable();
            //$table->arrayofstring('variant');
            $table->integer('seen_time')->default(0);
            $table->integer('sold')->default(0);
            $table->integer('stock')->default(0);

            $table->integer('regular_price');
            $table->integer('promo_price')->nullable();
            $table->float('tax_rate')->default(0.0);

            $table->float('width')->default(0.0);
            $table->float('height')->default(0.0);
            $table->float('weight')->default(0.0);
            $table->boolean('published')->default(0);

            $table->string('product_image_path')->nullable();
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
