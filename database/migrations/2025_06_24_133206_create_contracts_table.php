<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('person_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('monthly_rent', 10, 2);
            $table->enum('status', ['active', 'expired', 'terminated'])->default('active');
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
