<?php

namespace App\Livewire\Backend\WhyChooseUs;

use App\Models\WhyChooseUs;
use Livewire\Component;

class Index extends Component
{
    public $model;

    public $section_heading, $title_normal, $title_highlighted, $title_suffix, $description;

    public $cta_title_prefix, $cta_title_highlight, $cta_title_suffix, $cta_description, $cta_button_text;

    public $image, $image_text;

    public function mount()
    {
        $this->model = WhyChooseUs::first();

        if ($this->model) {
            $this->fill((array) $this->model->only(array_keys($this->model->getAttributes())));
        } else {
            // Use model default attributes
            $this->fill((new WhyChooseUs())->getAttributes());
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'section_heading' => 'nullable|string|max:255',
            'title_normal' => 'nullable|string|max:255',
            'title_highlighted' => 'nullable|string|max:255',
            'title_suffix' => 'nullable|string|max:255',
            'description' => 'nullable|string',

            'cta_title_prefix' => 'nullable|string|max:255',
            'cta_title_highlight' => 'nullable|string|max:255',
            'cta_title_suffix' => 'nullable|string|max:255',
            'cta_description' => 'nullable|string',
            'cta_button_text' => 'nullable|string|max:255',

            'image' => 'nullable|string|max:255',
            'image_text' => 'nullable|string|max:255',
        ]);

        if ($this->model) {
            $this->model->update($validated);
        } else {
            $this->model = WhyChooseUs::create($this->attributes); // Save default attributes
            $this->fill($this->attributes); // Refresh form with saved values
        }

        session()->flash('message', 'Why Choose Us section updated successfully.');
    }


    public function render()
    {
        return view('livewire.backend.why-choose-us.index');
    }
}
