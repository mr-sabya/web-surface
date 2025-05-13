<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'short_description',
        'description',
        'image',
        'service_id',
        'client_id',
        'start_date',
        'end_date',
        'url',
        'status',
    ];

    // Relationships
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
