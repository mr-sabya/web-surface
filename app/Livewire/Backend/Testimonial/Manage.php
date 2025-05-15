<?php

namespace App\Livewire\Backend\Testimonial;

use App\Models\Service;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $testimonialId;
    public $service_id, $name, $position, $company, $image, $content, $rating = 5, $is_active = true;
    public $existingImage;

    public $services;

    public function mount($testimonialId = null)
    {
        $this->testimonialId = $testimonialId;
        $this->services = Service::all();

        if ($testimonialId) {
            $testimonial = Testimonial::findOrFail($testimonialId);
            $this->service_id = $testimonial->service_id;
            $this->name = $testimonial->name;
            $this->position = $testimonial->position;
            $this->company = $testimonial->company;
            $this->content = $testimonial->content;
            $this->rating = $testimonial->rating;
            $this->is_active = $testimonial->is_active ? true : false;
            $this->existingImage = $testimonial->image;
        }
    }

    public function save()
    {
        $this->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string',
            'position' => 'required|string',
            'company' => 'required|string',
            'content' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'image' => 'nullable|image|max:1024',
            'is_active' => 'boolean',
        ]);

        $data = $this->only(['service_id', 'name', 'position', 'company', 'content', 'rating', 'is_active']);

        if ($this->image) {
            $data['image'] = $this->image->store('testimonials', 'public');
        }

        Testimonial::updateOrCreate(
            ['id' => $this->testimonialId],
            $data
        );

        session()->flash('success', 'Testimonial saved successfully.');
        return $this->redirect(route('admin.testimonial.index'), navigate: true); // adjust route as needed
    }

    public function render()
    {
        return view('livewire.backend.testimonial.manage');
    }
}
