<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_span',
        'title',
        'description',
        'button_text',
        'button_link',
        'button_icon',
        'button_target',
    ];

    public function features()
    {
        return $this->hasMany(AboutSectionFeature::class);
    }
}
