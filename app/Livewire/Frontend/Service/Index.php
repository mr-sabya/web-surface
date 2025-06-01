<?php

namespace App\Livewire\Frontend\Service;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $serviceId;


    public function mount($serviceId = null)
    {
        $this->serviceId = $serviceId;
    }

    public function render()
    {
        return view('livewire.frontend.service.index',[
            'service' => $this->serviceId ? Service::findOrFail($this->serviceId) : null,
        ]);
    }
}
