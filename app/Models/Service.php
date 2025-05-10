<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'heading',
        'sub_heading',
        'short_description',
        'description_title',
        'description',
        'image',

        // Feature Section
        'feature_section_title',
        'feature_section_sub_title',
        'feature_section_text',

        // Process Section
        'process_section_title',
        'process_section_sub_title',
        'process_section_text',

        // Addon Section
        'addon_section_title',
        'addon_section_sub_title',
        'addon_section_text',

        // Pricing Section
        'pricing_section_title',
        'pricing_section_sub_title',
        'pricing_section_text',

        // Portfolio Section
        'portfolio_section_title',
        'portfolio_section_sub_title',
        'portfolio_section_text',

        // Testimonial Section
        'testimonial_section_title',
        'testimonial_section_sub_title',
        'testimonial_section_text',
    ];

    /**
     * Automatically generate a slug from the title if not set.
     */
    protected static function booted()
    {
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }
}
