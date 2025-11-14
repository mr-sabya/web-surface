<?php

namespace App\Livewire\Backend\BadgeSection;

use App\Models\BadgeSection;
use Livewire\Component;

class Index extends Component
{
    public $section;
    public $subtitle, $title, $cta_text, $cta_button_text, $cta_button_link;

    public function mount()
    {
        $this->section = BadgeSection::first();
        if ($this->section) {
            $this->subtitle = $this->section->subtitle;
            $this->title = $this->section->title;
            $this->cta_text = $this->section->cta_text;
            $this->cta_button_text = $this->section->cta_button_text;
            $this->cta_button_link = $this->section->cta_button_link;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'cta_text' => 'nullable|string|max:255',
            'cta_button_text' => 'nullable|string|max:255',
            'cta_button_link' => 'nullable|string|max:255',
        ]);

        BadgeSection::updateOrCreate(['id' => optional($this->section)->id], $validated);

        $this->mount();
        session()->flash('message', 'Badge section content updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.badge-section.index');
    }
}