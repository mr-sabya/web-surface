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
        Schema::create('badge_sections', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable(); // For "WE MAKE RELATIONSHIPS"
            $table->string('title')->nullable(); // For the h2 title
            $table->string('cta_text')->nullable(); // For "We Promise. We Deliver."
            $table->string('cta_button_text')->nullable(); // For "Let's Work Together"
            $table->string('cta_button_link')->nullable(); // For the button's href
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('badge_sections');
    }
};
