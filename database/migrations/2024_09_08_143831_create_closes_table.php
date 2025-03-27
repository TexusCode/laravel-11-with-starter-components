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
        Schema::create('closes', function (Blueprint $table) {
            $table->id();
            $table->string('benzin92');
            $table->string('benzin92summ');
            $table->string('benzin95');
            $table->string('benzin95summ');
            $table->string('gas');
            $table->string('gassumm');
            $table->string('diesel');
            $table->string('dieselsumm');
            $table->string('electro');
            $table->string('summ');
            $table->string('ras');
            $table->string('bonus');
            $table->string('nal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('closes');
    }
};
