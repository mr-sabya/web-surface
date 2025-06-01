<?php

namespace App\Livewire\Frontend\Home\ClientSlider;

use App\Models\Client;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.client-slider.index',[
            'clients' => Client::orderBy('id', 'DESC')->get(),
        ]);
    }
}
