<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadgeSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'title',
        'cta_text',
        'cta_button_text',
        'cta_button_link',
    ];
}