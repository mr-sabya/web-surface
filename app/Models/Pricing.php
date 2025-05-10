<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'sub_title',
        'price_start',
        'price_end',
        'duration',
        'service_id',
    ];

    // Define the relationship with the Service model
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
