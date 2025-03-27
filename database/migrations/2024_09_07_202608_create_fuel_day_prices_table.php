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
        Schema::create('fuel_day_prices', function (Blueprint $table) {
            $table->id();
            $table->string('benzin92')->nullable();
            $table->string('benzin95')->nullable();
            $table->string('gas')->nullable();
            $table->string('diesel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_day_prices');
    }
};
