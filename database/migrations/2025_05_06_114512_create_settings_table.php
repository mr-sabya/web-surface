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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('tagline');
            $table->string('logo')->nullable();
            $table->string('white_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('website_link');
            $table->text('footer_about');
            $table->string('copyright');
            $table->text('meta_description')->nullable();
            $table->text('meta_tags')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->boolean('maintenance_mode')->default(false);

            // Additional fields
            $table->string('google_analytics_id')->nullable();
            $table->string('keywords')->nullable();
            $table->string('seo_title')->nullable();

            $table->string('currency_symbol')->default('$');
            $table->string('language')->default('en');
            $table->string('timezone')->default('UTC');

            $table->string('smtp_host')->nullable();
            $table->integer('smtp_port')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_password')->nullable();

            $table->boolean('two_factor_auth_enabled')->default(false);
            $table->integer('max_failed_login_attempts')->default(5);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
