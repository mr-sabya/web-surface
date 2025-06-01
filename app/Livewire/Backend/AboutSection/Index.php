<?php

namespace App\Livewire\Backend\AboutSection;

use App\Models\AboutSection;
use Livewire\Component;

class Index extends Component
{
    public $about;

    public $title_span;
    public $title;
    public $description;

    public $button_text;
    public $button_link;
    public $button_icon;
    public $button_target = '_self';

    public function mount()
    {
        $this->about = AboutSection::first();

        if ($this->about) {
            $this->title_span = $this->about->title_span;
            $this->title = $this->about->title;
            $this->description = $this->about->description;
            $this->button_text = $this->about->button_text;
            $this->button_link = $this->about->button_link;
            $this->button_icon = $this->about->button_icon;
            $this->button_target = $this->about->button_target;
        } else {
            // get from model default attributes
            $this->title_span = (new AboutSection())->getAttribute('title_span');
            $this->title = (new AboutSection())->getAttribute('title');
            $this->description = (new AboutSection())->getAttribute('description');
            $this->button_text = (new AboutSection())->getAttribute('button_text');
            $this->button_link = (new AboutSection())->getAttribute('button_link');
            $this->button_icon = (new AboutSection())->getAttribute('button_icon');
            $this->button_target = (new AboutSection())->getAttribute('button_target');
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'title_span' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'button_icon' => 'nullable|string|max:255',
            'button_target' => 'required|in:_self,_blank',
        ]);

        if ($this->about) {
            $this->about->update($validated);
        } else {
            AboutSection::create($validated);
        }

        session()->flash('message', 'About section updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.about-section.index');
    }
}
