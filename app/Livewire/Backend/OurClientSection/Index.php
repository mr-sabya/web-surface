<?php

namespace App\Livewire\Backend\OurClientSection;

use App\Models\OurClientSection;
use Livewire\Component;

class Index extends Component
{
    public $section;

    public $title;
    public $subtitle;

    public function mount()
    {
        $this->section = OurClientSection::first();

        if ($this->section) {
            $this->title = $this->section->title;
            $this->subtitle = $this->section->subtitle;
        } else {
            // To avoid errors on a fresh install, we can set defaults
            $this->title = '';
            $this->subtitle = '';
        }
    }

    public function save()
    {
        // Validation rules are defined inside the method, just like your example
        $validated = $this->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        // Use updateOrCreate for cleaner logic
        OurClientSection::updateOrCreate(
            ['id' => optional($this->section)->id],
            $validated
        );

        // Refresh the component's data after saving
        $this->mount();

        session()->flash('message', 'Our Client section updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.our-client-section.index');
    }
}