<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Using $guarded is a quick alternative during development.
     * For production, explicitly listing fields in $fillable is safer.
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     * This makes working with the published_at date much easier.
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Get the category that this post belongs to.
     * (A post belongs to one category).
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the content blocks for the blog post.
     * (A post has many content blocks).
     */
    public function contentBlocks()
    {
        return $this->hasMany(ContentBlock::class)->orderBy('order');
    }

    /**
     * Accessor to get the full public URL of the thumbnail.
     * This keeps the logic out of your views.
     */
    public function getThumbnailUrlAttribute()
    {
        // Check if the thumbnail exists and return its URL, otherwise return a placeholder.
        if ($this->thumbnail && Storage::disk('public')->exists($this->thumbnail)) {
            return Storage::url($this->thumbnail);
        }

        // Return a path to a default placeholder image
        return '/images/placeholder.jpg';
    }

    /**
     * Boot the model to automatically handle slug creation.
     */
    protected static function boot()
    {
        parent::boot();

        // Automatically create/update the slug when saving a post
        static::saving(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
}
