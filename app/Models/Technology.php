<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
    ];

    /**
     * Automatically generate a slug from the name if not provided.
     */
    protected static function booted()
    {
        static::creating(function ($technology) {
            if (empty($technology->slug)) {
                $technology->slug = Str::slug($technology->name);
            }
        });

        static::updating(function ($technology) {
            if (empty($technology->slug)) {
                $technology->slug = Str::slug($technology->name);
            }
        });
    }
}
