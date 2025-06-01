<?php

namespace App\Livewire\Backend\PortfolioSection;

use App\Models\PortfolioSection;
use Livewire\Component;

class Index extends Component
{
    public $section;

    public $title;
    public $subtitle;

    public function mount()
    {
        $this->section = PortfolioSection::first();

        if ($this->section) {
            $this->title = $this->section->title;
            $this->subtitle = $this->section->subtitle;
        } else {
            $defaults = new PortfolioSection();
            $this->title = $defaults->getAttribute('title');
            $this->subtitle = $defaults->getAttribute('subtitle');
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255|unique:portfolio_sections,subtitle,' . optional($this->section)->id,
        ]);

        if ($this->section) {
            $this->section->update($validated);
        } else {
            PortfolioSection::create($validated);
        }

        session()->flash('message', 'Portfolio section updated successfully.');
    }
    
    public function render()
    {
        return view('livewire.backend.portfolio-section.index');
    }
}
