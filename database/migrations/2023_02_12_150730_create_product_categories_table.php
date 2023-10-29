<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('categoryName');
            $table->string('category_banner')->nullalbe();
            $table->unsignedBigInteger('parentCategoryID')->nullable();
            $table->unsignedInteger('categoryCount')->default(0);

            $table->string('status')->default('active');
            $table->timestamps();

            $table->foreign('parentCategoryID')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
