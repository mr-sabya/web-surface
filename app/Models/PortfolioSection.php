<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
    ];

    protected $attributes = [
        'title' => 'Our Work',
        'subtitle' => 'Our Latest Creative Work',
    ];
}
