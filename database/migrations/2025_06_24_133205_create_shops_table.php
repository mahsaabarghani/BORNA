<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complex_id');
            $table->string('unit_number');
            $table->integer('floor');
            $table->decimal('area_sqm', 8, 2);
            $table->enum('status', ['vacant', 'occupied'])->default('vacant');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
