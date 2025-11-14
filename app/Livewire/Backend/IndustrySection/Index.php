<?php

namespace App\Livewire\Backend\IndustrySection;

use App\Models\IndustrySection;
use Livewire\Component;

class Index extends Component
{
    public $section;
    public $subtitle, $title, $description;

    public function mount()
    {
        $this->section = IndustrySection::first();
        if ($this->section) {
            $this->subtitle = $this->section->subtitle;
            $this->title = $this->section->title;
            $this->description = $this->section->description;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        IndustrySection::updateOrCreate(
            ['id' => optional($this->section)->id],
            $validated
        );

        $this->mount(); // Refresh data from the database
        session()->flash('message', 'Industry section content updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.industry-section.index');
    }
}