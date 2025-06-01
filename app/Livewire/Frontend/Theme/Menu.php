<?php

namespace App\Livewire\Frontend\Theme;

use App\Models\Service;
use Livewire\Component;

class Menu extends Component
{
    public $className;

    public function mount($className)
    {
        $this->className = $className;    
    }

    public function render()
    {
        return view('livewire.frontend.theme.menu', [
            'services' => Service::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
