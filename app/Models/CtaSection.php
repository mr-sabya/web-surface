<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtaSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'title',
        'button_text',
        'button_link',
        'secondary_text',
        'phone_number',
        'phone_link',
    ];
}