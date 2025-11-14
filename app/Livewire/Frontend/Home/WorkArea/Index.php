<?php

namespace App\Livewire\Frontend\Home\WorkArea;

use App\Models\Industry;
use App\Models\IndustrySection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Fetch the main section content (title, subtitle, description)
        $section = IndustrySection::first();

        // Fetch all the individual industry items, ordering them by the 'order' column
        $industries = Industry::orderBy('order', 'asc')->get();

        // Pass both the section data and the industries collection to the view
        return view('livewire.frontend.home.work-area.index', [
            'section' => $section,
            'industries' => $industries,
        ]);
    }
}