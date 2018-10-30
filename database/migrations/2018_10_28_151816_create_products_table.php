<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('dimension')->nullable();
            $table->string('angle')->nullable();
            $table->string('puissance')->nullable();
            $table->string('flux_lumineux')->nullable();
            $table->string('alimentation')->nullable();
            $table->string('tcoulor')->nullable();
            $table->string('module')->nullable();
            $table->string('poids')->nullable();
            $table->string('lumens')->nullable();
            $table->string('battery')->nullable();
            $table->string('technical_details');
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

            $table->unsignedInteger('sub_category_id');
            $table->foreign('sub_category_id')
                ->references('id')->on('sub_categories');

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
