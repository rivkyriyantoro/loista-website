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
            $table->id('id_product');
            $table->foreignId('id_subcategory')->constrained('subcategories')->references('id_subcategory')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name_product');
            $table->string('SKU');
            $table->integer('price');
            $table->integer('discount_price');
            $table->boolean('is_promo');
            $table->text('description');
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
