<?php

namespace App\Livewire\Frontend\Home\About;

use App\Models\AboutSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.about.index',[
            'about' => AboutSection::first(),
        ]);
    }
}
