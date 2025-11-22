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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->text('content');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            // counters
            $table->string('counster_1')->nullable();
            $table->string('counster_1_text')->nullable();
            $table->string('counster_2')->nullable();
            $table->string('counster_2_text')->nullable();
            $table->string('counster_3')->nullable();
            $table->string('counster_3_text')->nullable();

            $table->string('mission_vision_heading')->nullable();
            $table->text('mission_vision_text')->nullable();

            $table->text('mission')->nullable();
            $table->string('mission_icon')->nullable();
            $table->text('vision')->nullable();
            $table->string('vision_icon')->nullable();

            $table->string('philosophy_section_title')->nullable();
            $table->string('philosophy_section_subtitle')->nullable();

            $table->string('whychoose_section_title')->nullable();
            $table->string('whychoose_section_subtitle')->nullable();

            $table->string('timeline_section_title')->nullable();
            $table->string('timeline_section_subtitle')->nullable();

            $table->string('team_section_title')->nullable();
            $table->string('team_section_subtitle')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
