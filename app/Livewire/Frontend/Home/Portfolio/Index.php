<?php

namespace App\Livewire\Frontend\Home\Portfolio;

use App\Models\Portfolio;
use App\Models\PortfolioSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.portfolio.index',[
            'portfolio_section' => PortfolioSection::first(),
            'portfolios' => Portfolio::where('status', 'published')
                ->orderBy('created_at', 'desc')
                ->take(6)->get(),
        ]);
    }
}
