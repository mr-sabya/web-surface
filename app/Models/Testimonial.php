<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'position',
        'company',
        'image',
        'content',
        'rating',
        'is_active',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
