<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];

    /**
     * Get the parent category of this category.
     * A category can have one parent.
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get the child categories of this category.
     * A category can have many children.
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Get the posts associated with this category.
     * A child category can have many posts.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Boot the model to automatically handle slug creation.
     */
    protected static function boot()
    {
        parent::boot();

        // Automatically create/update the slug when saving a category
        static::saving(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
