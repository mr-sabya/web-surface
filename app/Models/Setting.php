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


    // General Settings
    public function generalSettings()
    {
        return [
            'site_title' => $this->site_title,
            'tagline' => $this->tagline,
            'logo' => $this->logo,
            'white_logo' => $this->white_logo,
            'favicon' => $this->favicon,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'website_link' => $this->website_link,
            'footer_about' => $this->footer_about,
            'copyright' => $this->copyright,
        ];
    }

    // SEO Settings
    public function seoSettings()
    {
        return [
            'meta_description' => $this->meta_description,
            'meta_tags' => $this->meta_tags,
            'meta_title' => $this->meta_title,
            'og_title' => $this->og_title,
            'og_description' => $this->og_description,
            'og_image' => $this->og_image,
        ];
    }

    // Maintenance Mode Settings
    public function maintenanceModeSettings()
    {
        return [
            'maintenance_mode' => $this->maintenance_mode,
        ];
    }

    // Analytics and SEO
    public function analyticsSeoSettings()
    {
        return [
            'google_analytics_id' => $this->google_analytics_id,
            'keywords' => $this->keywords,
            'seo_title' => $this->seo_title,
        ];
    }

    // Currency & Language Settings
    public function currencyLanguageSettings()
    {
        return [
            'currency_symbol' => $this->currency_symbol,
            'language' => $this->language,
            'timezone' => $this->timezone,
        ];
    }

    // Email Settings (SMTP)
    public function emailSettings()
    {
        return [
            'smtp_host' => $this->smtp_host,
            'smtp_port' => $this->smtp_port,
            'smtp_username' => $this->smtp_username,
        ];
    }

    // Security Settings
    public function securitySettings()
    {
        return [
            'two_factor_auth_enabled' => $this->two_factor_auth_enabled,
            'max_failed_login_attempts' => $this->max_failed_login_attempts,
        ];
    }
}
