<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tranizations', function (Blueprint $table) {
            $table->id();
            $table->string('cardid')->nullable();
            $table->string('fueltype')->nullable();
            $table->string('operationtype')->nullable();
            $table->string('cash')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranizations');
    }
};
