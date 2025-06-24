<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('complexes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->unsignedInteger('floors');
            $table->unsignedInteger('parking_spaces');
            $table->foreignId('manager_person_id')->nullable()->constrained('people')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complexes');
    }
};
