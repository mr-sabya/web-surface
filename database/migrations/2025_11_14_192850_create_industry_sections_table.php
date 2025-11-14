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
        Schema::create('industry_sections', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable(); // e.g., "We Have Worked Across..."
            $table->string('title')->nullable(); // e.g., "Industries We Serve"
            $table->text('description')->nullable(); // For the paragraph text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industry_sections');
    }
};
