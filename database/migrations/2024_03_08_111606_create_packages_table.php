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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('pack_name')->nullable();
            $table->string('pack_price')->nullable();
            $table->string('seats_wash')->nullable();
            $table->string('vacuum_cleaning')->nullable();
            $table->string('exterior_cleaning')->nullable();
            $table->string('interior_wet_cleaning')->nullable();
            $table->string('window_wiping')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
