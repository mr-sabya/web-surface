<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'office_type',
        'address',
        'email',
        'phone',
        'image',
        'order',
    ];
}