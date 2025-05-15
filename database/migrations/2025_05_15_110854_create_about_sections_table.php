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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title_span')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            // button
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_icon')->nullable();
            $table->string('button_target')->default('_self');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
