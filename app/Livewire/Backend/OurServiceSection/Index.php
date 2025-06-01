<?php

namespace App\Livewire\Backend\OurServiceSection;

use App\Models\OurServiceSection;
use Livewire\Component;

class Index extends Component
{
    public $section;

    public $section_text;
    public $title;
    public $subtitle;
    public $text;

    public function mount()
    {
        $this->section = OurServiceSection::first();

        if ($this->section) {
            $this->section_text = $this->section->section_text;
            $this->title = $this->section->title;
            $this->subtitle = $this->section->subtitle;
            $this->text = $this->section->text;
        } else {
            $default = new OurServiceSection();
            $this->section_text = $default->getAttribute('section_text');
            $this->title = $default->getAttribute('title');
            $this->subtitle = $default->getAttribute('subtitle');
            $this->text = $default->getAttribute('text');
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'section_text' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'text' => 'nullable|string',
        ]);

        if ($this->section) {
            $this->section->update($validated);
        } else {
            OurServiceSection::create($validated);
        }

        session()->flash('message', 'Our Service Section updated successfully.');
    }


    public function render()
    {
        return view('livewire.backend.our-service-section.index');
    }
}
