<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServiceSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_text',
        'title',
        'subtitle',
        'text',
    ];

    protected $attributes = [
        'section_text' => 'Web Development',
        'title' => 'Service',
        'subtitle' => 'Our Services',
        'text' => 'We think big and have hands in all leading technology platforms to provide you wide array of services.',
    ];
}
