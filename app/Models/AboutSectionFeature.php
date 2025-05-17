<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSectionFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_section_id',
        'icon',
        'title',
        'text',
        'counter',
        'counter_icon',
        'color_code',
    ];

    public function aboutSection()
    {
        return $this->belongsTo(AboutSection::class);
    }
}
