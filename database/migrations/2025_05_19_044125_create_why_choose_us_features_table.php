<?php

use App\Models\WhyChooseUs;
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
        Schema::create('why_choose_us_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('why_choose_us_id')
                ->constrained('why_choose_us') // ✅ explicitly reference correct table
                ->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable(); // Optional: Add an icon field if needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us_features');
    }
};
