<?php

namespace App\Livewire\Frontend\Home\Badges;

use App\Models\Badge;
use App\Models\BadgeSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Fetch the main section content (title, subtitle, CTA)
        $section = BadgeSection::first();

        // Fetch all the individual badges, ordering them by the 'order' column
        $badges = Badge::orderBy('order', 'asc')->get();

        // Pass both data sets to the view
        return view('livewire.frontend.home.badges.index', [
            'section' => $section,
            'badges' => $badges,
        ]);
    }
}