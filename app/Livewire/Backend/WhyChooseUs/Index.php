<?php

namespace App\Livewire\Backend\WhyChooseUs;

use App\Models\WhyChooseUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;


    public $model;

    public $section_heading, $title_normal, $title_highlighted, $title_suffix, $description;

    public $cta_title_prefix, $cta_title_highlight, $cta_title_suffix, $cta_description, $cta_button_text;

    public $image, $newImage, $image_text;

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

            'newImage' => 'nullable|image|max:2048', // Validate new image upload
            'image_text' => 'nullable|string|max:255',
        ]);

        // Handle image upload if newImage is provided
        // Handle image upload if newImage is provided
        if ($this->newImage) {
            $validated['image'] = $this->newImage->store('why_choose_us', 'public'); // Store uploaded file
        } else {
            $validated['image'] = $this->model ? $this->model->image : null; // Use existing image if available
        }

        if ($this->model) {
            $this->model->update($validated);
        } else {
            $this->model = WhyChooseUs::create($validated); // Use validated data, not $this->attributes
            $this->fill($this->model->toArray()); // Refresh form with saved model values
        }


        session()->flash('message', 'Why Choose Us section updated successfully.');
    }


    public function render()
    {
        return view('livewire.backend.why-choose-us.index');
    }
}
