<?php

use App\Models\AboutSection;
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
        Schema::create('about_section_features', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AboutSection::class)->constrained()->cascadeOnDelete();
            $table->string('icon')->nullable();
            $table->string('title')->nullable();
            $table->string('text')->nullable();

            // counter
            $table->string('counter')->nullable();
            $table->string('counter_icon')->nullable();

            // color code
            $table->string('color_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_section_features');
    }
};
