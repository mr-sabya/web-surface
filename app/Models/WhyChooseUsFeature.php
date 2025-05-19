<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUsFeature extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(WhyChooseUs::class, 'why_choose_us_section_id');
    }
}
