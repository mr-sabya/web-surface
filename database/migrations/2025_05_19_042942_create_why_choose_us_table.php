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
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('section_heading')->nullable();

            $table->string('title_normal')->nullable();
            $table->string('title_highlighted')->nullable();
            $table->string('title_suffix')->nullable();
            $table->text('description')->nullable();

            $table->string('cta_title_prefix')->nullable();
            $table->string('cta_title_highlight')->nullable();
            $table->string('cta_title_suffix')->nullable();
            $table->text('cta_description')->nullable();
            $table->string('cta_button_text')->nullable();

            $table->string('image')->nullable();
            $table->string('image_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};
