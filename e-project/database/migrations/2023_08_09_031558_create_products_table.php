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
            $table->string('name');
            $table->integer('price');
            $table->string('thumbnail');
            $table->text('description');
            $table->string('material');//vật liệu
            $table->integer('high');
            $table->integer('width');
            $table->integer('length');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('discount_id')->constrained('discount');
            $table->tinyInteger('status');
            $table->tinyInteger('featured');
            $table->tinyIncrements('active');
            $table->timestamps();
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
