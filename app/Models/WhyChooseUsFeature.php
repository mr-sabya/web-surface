<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUsFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'why_choose_us_id',
        'title',
        'description',
        'icon', // as image
    ];

    /**
     * Get the parent WhyChooseUs entry.
     */
    public function whyChooseUs()
    {
        return $this->belongsTo(WhyChooseUs::class);
    }
}
