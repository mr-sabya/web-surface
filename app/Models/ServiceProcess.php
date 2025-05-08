<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'image',
        'service_id',
    ];

    /**
     * Get the service that owns the process.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
