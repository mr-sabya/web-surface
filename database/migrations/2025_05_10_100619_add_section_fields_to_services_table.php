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
        Schema::table('services', function (Blueprint $table) {
            // Feature Section
            $table->string('feature_section_title')->nullable();
            $table->string('feature_section_sub_title')->nullable();
            $table->text('feature_section_text')->nullable();

            // Process Section
            $table->string('process_section_title')->nullable();
            $table->string('process_section_sub_title')->nullable();
            $table->text('process_section_text')->nullable();

            // Addon Section
            $table->string('addon_section_title')->nullable();
            $table->string('addon_section_sub_title')->nullable();
            $table->text('addon_section_text')->nullable();

            // Pricing Section
            $table->string('pricing_section_title')->nullable();
            $table->string('pricing_section_sub_title')->nullable();
            $table->text('pricing_section_text')->nullable();

            // Portfolio Section
            $table->string('portfolio_section_title')->nullable();
            $table->string('portfolio_section_sub_title')->nullable();
            $table->text('portfolio_section_text')->nullable();

            // Testimonial Section
            $table->string('testimonial_section_title')->nullable();
            $table->string('testimonial_section_sub_title')->nullable();
            $table->text('testimonial_section_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'feature_section_title',
                'feature_section_sub_title',
                'feature_section_text',
                'process_section_title',
                'process_section_sub_title',
                'process_section_text',
                'addon_section_title',
                'addon_section_sub_title',
                'addon_section_text',
                'pricing_section_title',
                'pricing_section_sub_title',
                'pricing_section_text',
                'portfolio_section_title',
                'portfolio_section_sub_title',
                'portfolio_section_text',
                'testimonial_section_title',
                'testimonial_section_sub_title',
                'testimonial_section_text',
            ]);
        });
    }
};
