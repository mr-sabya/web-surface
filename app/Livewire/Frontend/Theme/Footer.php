<?php

namespace App\Livewire\Frontend\Theme;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.frontend.theme.footer',[
            'settings' => \App\Models\Setting::first(),
        ]);
    }
}
