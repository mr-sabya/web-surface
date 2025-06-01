<?php

namespace App\Livewire\Frontend\Home\Service;

use App\Models\OurServiceSection;
use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.service.index', [
            'service_section' => OurServiceSection::first(),
            'services' => Service::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
