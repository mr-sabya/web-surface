<?php

namespace App\Livewire\Frontend\Home\WhyChoose;

use App\Models\WhyChooseUs;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.why-choose.index',[
            'whyChooseUs' => WhyChooseUs::with('features')->firstOrFail(),
        ]);
    }
}
