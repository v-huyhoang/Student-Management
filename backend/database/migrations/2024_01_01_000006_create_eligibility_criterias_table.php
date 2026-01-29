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
        Schema::create('eligibility_criterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->float('min_attendance')->default(0.8); // 80% attendance
            $table->float('min_score')->default(5.0); // Minimum midway score if applicable
            $table->boolean('no_debt')->default(true); // Must not have tuition debt
            $table->text('description')->nullable(); // Text rule for AI context
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_criterias');
    }
};
