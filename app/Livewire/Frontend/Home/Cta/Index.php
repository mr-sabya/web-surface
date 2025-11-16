<?php

namespace App\Livewire\Frontend\Home\Cta;

use App\Models\CtaSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $section = CtaSection::first();

        return view('livewire.frontend.home.cta.index', [
            'section' => $section,
        ]);
    }
}