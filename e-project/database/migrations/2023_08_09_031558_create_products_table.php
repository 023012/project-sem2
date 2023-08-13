<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('discount_id');
            $table->string('name');
            $table->integer('price');
            $table->string('thumbnail');
            $table->text('description');
            $table->string('material');//vật liệu
            $table->integer('high');
            $table->integer('width');
            $table->integer('length');
            $table->integer('quantity');
            $table->tinyInteger('status');
            $table->tinyInteger('featured');
            $table->tinyInteger('active');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
