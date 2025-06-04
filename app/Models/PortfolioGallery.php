<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_id',
        'title',
        'image',
        'image_alt',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
