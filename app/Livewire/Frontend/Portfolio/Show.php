<?php

namespace App\Livewire\Frontend\Portfolio;

use App\Models\Portfolio;
use Livewire\Component;

class Show extends Component
{
    public $portfolioId;


    public function mount($portfolioId)
    {
        $this->portfolioId = $portfolioId;
    }   


    public function render()
    {
        return view('livewire.frontend.portfolio.show',[
            'portfolio' => Portfolio::findOrFail($this->portfolioId),
        ]);
    }
}
