<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    /** -----------------------------------------------------------------
     *  Mass-assignable columns
     *  ---------------------------------------------------------------- */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_published',
    ];

    /** -----------------------------------------------------------------
     *  Casts
     *  ---------------------------------------------------------------- */
    protected $casts = [
        'is_published' => 'boolean',
    ];

    /** -----------------------------------------------------------------
     *  Boot: generate slug automatically if missing
     *  ---------------------------------------------------------------- */
    protected static function boot()
    {
        parent::boot();

        static::saving(function (Page $page) {
            // If slug not set or title changed, regenerate it
            if (!$page->slug || $page->isDirty('title')) {
                $page->slug = Str::slug($page->title);
            }
        });
    }

    /** -----------------------------------------------------------------
     *  Route model binding: use slug instead of id
     *  ---------------------------------------------------------------- */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /** -----------------------------------------------------------------
     *  Query scope: only published pages
     *  ---------------------------------------------------------------- */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }
}
