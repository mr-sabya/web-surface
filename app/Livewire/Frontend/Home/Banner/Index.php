<?php

namespace App\Livewire\Frontend\Home\Banner;

use App\Models\Banner;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.banner.index',[
            'banner' => Banner::first(),
        ]);
    }
}
