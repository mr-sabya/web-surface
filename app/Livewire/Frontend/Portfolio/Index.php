<?php

namespace App\Livewire\Frontend\Portfolio;

use App\Models\Portfolio;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.frontend.portfolio.index', [
            'portfolios' => Portfolio::where('status', 'published')
                ->orderBy('created_at', 'desc')
                ->get(),
            'services' => Service::all(),
        ]);
    }
}
