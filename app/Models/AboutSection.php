<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_span',
        'title',
        'description',
        'button_text',
        'button_link',
        'button_icon',
        'button_target',
    ];

    protected $attributes = [
        'title_span' => 'Niwax',
        'title' => 'Mobile App Development Company',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>
        <p><strong>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Simply dummy text of the printing and typesetting industry.</strong></p>',
        'button_text' => 'Request A Quote',
        'button_link' => '#',
        'button_icon' => 'fas fa-chevron-right fa-icon',
        'button_target' => '_self',
    ];

    public function features()
    {
        return $this->hasMany(AboutSectionFeature::class);
    }
}
