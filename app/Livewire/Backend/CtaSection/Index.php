<?php

namespace App\Livewire\Backend\CtaSection;

use App\Models\CtaSection;
use Livewire\Component;

class Index extends Component
{
    public $section;
    public $subtitle, $title, $button_text, $button_link, $secondary_text, $phone_number, $phone_link;

    public function mount()
    {
        $this->section = CtaSection::first();
        if ($this->section) {
            $this->subtitle = $this->section->subtitle;
            $this->title = $this->section->title;
            $this->button_text = $this->section->button_text;
            $this->button_link = $this->section->button_link;
            $this->secondary_text = $this->section->secondary_text;
            $this->phone_number = $this->section->phone_number;
            $this->phone_link = $this->section->phone_link;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'secondary_text' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'phone_link' => 'nullable|string|max:255',
        ]);

        CtaSection::updateOrCreate(['id' => optional($this->section)->id], $validated);

        $this->mount(); // Refresh data
        session()->flash('message', 'CTA section content updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.cta-section.index');
    }
}