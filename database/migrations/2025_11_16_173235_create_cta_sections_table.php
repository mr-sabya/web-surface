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
        Schema::create('cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable(); // "Let's work together"
            $table->string('title')->nullable(); // "We Love to Listen to Your Requirements"
            $table->string('button_text')->nullable(); // "GET STARTED"
            $table->string('button_link')->nullable(); // The URL for the button
            $table->string('secondary_text')->nullable(); // "Or call us now"
            $table->string('phone_number')->nullable(); // "(123) 456 7890" (Display text)
            $table->string('phone_link')->nullable(); // "+11234567890" (For the tel: link)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_sections');
    }
};
