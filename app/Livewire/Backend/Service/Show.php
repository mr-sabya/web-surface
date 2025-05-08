<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;

class Show extends Component
{
    public Service $service;

    public function mount($serviceId)
    {
        $this->service = Service::findOrFail($serviceId);
    }
    
    public function render()
    {
        return view('livewire.backend.service.show');
    }
}
