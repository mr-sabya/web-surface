<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Setting extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        // General Settings
        'site_title',
        'tagline',
        'logo',
        'white_logo',
        'favicon',
        'email',
        'phone',
        'address',
        'website_link',
        'footer_about',
        'copyright',

        // SEO Settings
        'meta_description',
        'meta_tags',
        'meta_title',
        'og_title',
        'og_description',
        'og_image',

        // Maintenance Mode
        'maintenance_mode',

        // Google Analytics & SEO
        'google_analytics_id',
        'keywords',
        'seo_title',

        // Currency & Language Settings
        'currency_symbol',
        'language',
        'timezone',

        // Email Settings (SMTP)
        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',

        // Security Settings
        'two_factor_auth_enabled',
        'max_failed_login_attempts',
    ];

    // The attributes that should be hidden for arrays (for security)
    protected $hidden = [
        'smtp_password', // Hide the SMTP password
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'maintenance_mode' => 'boolean',
        'two_factor_auth_enabled' => 'boolean',
        'max_failed_login_attempts' => 'integer',
        'smtp_port' => 'integer',
    ];

    // Accessor for the site title
    public function getSiteTitleAttribute($value)
    {
        return ucfirst($value);
    }

    // Accessor for the meta description (trimmed for display)
    public function getMetaDescriptionAttribute($value)
    {
        return Str::limit($value, 100);
    }

    // Mutator to set the site title as uppercase
    public function setSiteTitleAttribute($value)
    {
        $this->attributes['site_title'] = strtoupper($value);
    }
}
