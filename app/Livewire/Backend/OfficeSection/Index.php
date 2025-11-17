<?php

namespace App\Livewire\Backend\OfficeSection;

use App\Models\OfficeSection;
use Livewire\Component;

class Index extends Component
{
    public $section;
    public $subtitle, $title;

    public function mount()
    {
        $this->section = OfficeSection::first();
        if ($this->section) {
            $this->title = $this->section->title;
            $this->subtitle = $this->section->subtitle;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        OfficeSection::updateOrCreate(
            ['id' => optional($this->section)->id],
            $validated
        );

        $this->mount(); // Refresh data from the database
        session()->flash('message', 'Office section content updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.office-section.index');
    }
}
