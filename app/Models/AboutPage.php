<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'image_1',
        'image_2',

        // counters
        'counster_1',
        'counster_1_text',
        'counster_2',
        'counster_2_text',
        'counster_3',
        'counster_3_text',

        'mission_vision_heading',
        'mission_vision_text',

        'mission',
        'mission_icon',
        'vision',
        'vision_icon',

        'philosophy_section_title',
        'philosophy_section_subtitle',

        'whychoose_section_title',
        'whychoose_section_subtitle',

        'timeline_section_title',
        'timeline_section_subtitle',

        'team_section_title',
        'team_section_subtitle',
    ];
}
