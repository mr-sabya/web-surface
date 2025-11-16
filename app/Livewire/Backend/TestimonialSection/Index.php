<?php

namespace App\Livewire\Backend\TestimonialSection;

use App\Models\TestimonialSection;
use Livewire\Component;

class Index extends Component
{
    public $section;
    public $subtitle, $title, $review_platform_title;

    public function mount()
    {
        $this->section = TestimonialSection::first();
        if ($this->section) {
            $this->subtitle = $this->section->subtitle;
            $this->title = $this->section->title;
            $this->review_platform_title = $this->section->review_platform_title;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'review_platform_title' => 'nullable|string|max:255',
        ]);

        TestimonialSection::updateOrCreate(
            ['id' => optional($this->section)->id],
            $validated
        );

        $this->mount(); // Refresh data from database
        session()->flash('message', 'Testimonial section content updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.testimonial-section.index');
    }
}