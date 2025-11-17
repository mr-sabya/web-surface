<?php

namespace App\Livewire\Frontend\Home\Location;

use App\Models\Office;
use App\Models\OfficeSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Fetch the main section content (title, subtitle)
        $section = OfficeSection::first();

        // Fetch all the individual office locations, ordered by the 'order' column
        $offices = Office::orderBy('order', 'asc')->get();

        // Pass both data sets to the view
        return view('livewire.frontend.home.location.index', [
            'section' => $section,
            'offices' => $offices,
        ]);
    }
}