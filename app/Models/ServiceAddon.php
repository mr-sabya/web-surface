<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'icon',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
