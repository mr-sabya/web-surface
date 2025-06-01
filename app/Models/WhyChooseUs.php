<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;

    // table
    protected $table = 'why_choose_us';

    protected $fillable = [
        'section_heading',
        'title_normal',
        'title_highlighted',
        'title_suffix',
        'description',

        'cta_title_prefix',
        'cta_title_highlight',
        'cta_title_suffix',
        'cta_description',
        'cta_button_text',

        'image',
        'image_text',
    ];

    protected $attributes = [
        'section_heading' => 'Why Choose Us',
        'title_normal' => 'Why The Niwax',
        'title_highlighted' => 'Ranked Top',
        'title_suffix' => 'Among The Leading Web & App Development Companies',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',

        'cta_title_prefix' => 'Let\'s Start a',
        'cta_title_highlight' => 'New Project',
        'cta_title_suffix' => 'Together',
        'cta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.',
        'cta_button_text' => 'Request A Quote',

        'image' => 'images/why-choose-us.png',
        'image_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
    ];

    public function features()
    {
        return $this->hasMany(WhyChooseUsFeature::class);
    }
}
