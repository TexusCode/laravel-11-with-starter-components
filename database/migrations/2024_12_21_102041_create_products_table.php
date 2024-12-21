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
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('unit_id');
            $table->string('quantity');
            $table->string('supplier');
            $table->string('buy_price');
            $table->string('sell_price');
            $table->string('image')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->default('В наличии');
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
